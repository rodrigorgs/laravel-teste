#!/bin/bash

# SERVER_USER
# SERVER_NAME
# RSYNC_PASSWORD
# SSH_PORT

TRAVIS_BUILD_DIR=${TRAVIS_BUILD_DIR:-.}

sshpass -p "$RSYNC_PASSWORD" rsync -e "ssh -p $SSH_PORT -o StrictHostKeyChecking=no" -r --delete-after --quiet $TRAVIS_BUILD_DIR/ $SERVER_USER@$SERVER_NAME:./laravel-teste

sshpass -p "$RSYNC_PASSWORD" ssh -p $SSH_PORT /bin/bash << EOF
  sudo chown -R www-data:www-data ~/laravel-teste
  cd ~/laravel-teste
  # php artisan migrate # TODO: configure .env first
EOF
