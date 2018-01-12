#!/bin/bash

# Modifique as variáveis de ambiente de acordo com o seu projeto:

export SAMPLE_ENV_FILE=.env.travis
export GIT_PROJECT="https://github.com/ufbafacil/colegiado.git"
export GIT_PROJECT_NAME=colegiado

# Abra o editor do CodeAnywhere.
# Escolha File > New Connection > Container > Laravel 5 (Ubuntu 14.04).
# Esse container já vem com o PHP e o Laravel instalados, no entanto
# são versões antigas. Instalaremos versões mais novas.

# Configura o locale

sudo locale-gen pt_BR.UTF-8
sudo update-locale LANG=pt_BR.UTF-8

# Instala comando add-apt-repository
sudo apt-get update
sudo apt-get install -y software-properties-common python-software-properties

# Adiciona repositório não oficial do pacote PHP
sudo LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
sudo apt-get update

# Instala PHP mais novo
sudo apt-get install -y --force-yes php7.0 libapache2-mod-php7.0 php7.0-bcmath php7.0-bz2 php7.0-common php7.0-curl php7.0-fpm php7.0-gd php7.0-imap php7.0-intl php7.0-json php7.0-ldap php7.0-mbstring php7.0-mcrypt php7.0-mysql php7.0-opcache php7.0-pgsql php7.0-sqlite3 php7.0-xml php7.0-zip

# Atualiza Composer
sudo /usr/local/bin/composer self-update

# Troca o módulo do PHP usado no Apache
sudo a2dismod php5
sudo a2enmod php7.0
sudo service apache2 restart

# Projeto

rm -rf workspace
git clone $GIT_PROJECT
ln -s $GIT_PROJECT_NAME workspace

cd workspace
composer install
sudo chmod -R 777 storage

cp $SAMPLE_ENV_FILE .env
echo >> .env
echo DB_DATABASE=forge >> .env
echo DB_USERNAME=root >> .env
echo DB_PASSWORD= >> .env

# Ao final, clique com o botão direito na conexão e clique em Restart

