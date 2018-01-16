#!/bin/bash

# Instala projeto em um ambiente configurado no CodeAnywhere
# Para configurar o ambiente, use o script
# instala-codeanywhere.sh

export SAMPLE_ENV_FILE="${SAMPLE_ENV_FILE:=.env.travis}"
export GIT_PROJECT="${GIT_PROJECT:=https://github.com/ufbafacil/colegiado.git}"
export GIT_PROJECT_NAME="${GIT_PROJECT_NAME:=colegiado}"

cd
rm -rf workspace
git clone $GIT_PROJECT workspace

cd workspace
composer install
sudo chmod -R 777 storage

cp $SAMPLE_ENV_FILE .env
echo >> .env
echo DB_DATABASE=forge >> .env
echo DB_USERNAME=root >> .env
echo DB_PASSWORD= >> .env

php artisan key:generate
php artisan config:clear
