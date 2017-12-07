#!/bin/bash

# SERVER_USER
# SERVER_NAME
# RSYNC_PASSWORD
# SSH_PORT
# APP_ENV (production, testing...)
# GIT_CRYPT_BASE64_KEY

APP_ENV=${APP_ENV:-production}
TRAVIS_BUILD_DIR=${TRAVIS_BUILD_DIR:-.}

# Unlock using git-crypt
cd $TRAVIS_BUILD_DIR/
echo "$GIT_CRYPT_BASE64_KEY" | base64 --decode | git-crypt unlock -

# Copy files to server
sshpass -p "$RSYNC_PASSWORD" rsync -e "ssh -p $SSH_PORT -o StrictHostKeyChecking=no" -z -r --delete-after --exclude '.git*' --quiet $TRAVIS_BUILD_DIR/ $SERVER_USER@$SERVER_NAME:./tmp-laravel-teste

# Run commands on server
sshpass -p "$RSYNC_PASSWORD" ssh -p $SSH_PORT $SERVER_USER@$SERVER_NAME /bin/bash << EOF
  # Use the correct .env file
  mv ~/tmp-laravel-teste/.env.$APP_ENV ~/tmp-laravel-teste/.env

  # Migrate
  cd ~/tmp-laravel-teste
  php artisan migrate --force  # TODO: should we force it?

  # Fix permissions
  cd ~/tmp-laravel-teste
  sudo chgrp -R www-data storage bootstrap/cache
  sudo chmod -R ug+rwx storage bootstrap/cache

  # Move old and new deployed directories
  sudo rm -rf ~/old-laravel-teste
  if [[ -d ~/laravel-teste ]]; then
    mv ~/laravel-teste ~/old-laravel-teste
  fi
  mv ~/tmp-laravel-teste ~/laravel-teste

EOF
