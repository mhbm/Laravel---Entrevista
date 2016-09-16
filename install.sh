#!/bin/bash
#-------------------------------------------------------------------------
#
# @FILESOURCE install.sh
# @AUTHOR Mateus Macedo
# @DATE Seg 15 Setembro
# @VERSION 1.0.0
#
#-------------------------------------------------------------------------
#-------------------------------------------------------------------------
# __BEGIN_MAIN__
# Install PHP 5.6
echo "Instalando o PHP 5.6"
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php5.6 php5.6-mcrypt php5.6-gd
sudo apt-get install php5.6-mbstring
sudo apt-get install php5.6-xml
echo "Fim da Instalação do PHP 5.6"
# Install apache2
echo "Instalando o apache2"
sudo apt-get install apache2 libapache2-mod-php5
echo "Fim da instalação do apache2"
# Install Composer
echo 'Instalando o composer'
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/compose
echo 'Fim da instalação do composer'
# Install sqlite
echo 'Instalação do sqlite'
sudo apt-get install sqlite
sudo apt-get install php5.6-sqlite
echo 'Fim da Instalação do sqlite'
echo 'Instalação do phpunit'
sudo apt-get install phpunit
echo 'Fim da instalação do phpunit'
composer global require "laravel/installer"
# Install packages
echo 'Realizando o composer'
composer install
composer require doctrine/dbal
# Create datanase.sqlite
echo 'Criando o database.sqlite'
touch database/database.sqlite
sudo chmod 777 database/database.sqlite
# __END_MAIN__
