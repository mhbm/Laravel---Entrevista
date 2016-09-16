# Laravel PHP Framework - Teste Mateus Macedo
Foi desenvolvido usando php, phpunit, composer e laravel.
Como ferramente utilizei o ATOM

Para rodar o projeto é necessário seguir estas instruções:

## Utilizar o comando ./install.sh
Esse arquivo instala todos os pacotes e bibliotecas necessários para rodar o projeto

## Utilizar o comando php artisan migrate:install e depois php artisan db:seed
Esses comandos criam as tabelas e "populam" ela com os dados via XML

## Para realizar alguns testes basta digitar phpunit
Criei alguns testes para verificar se o carregamento dos dados estão corretos

## Acessar e visualizar os dados utilizar o php artisan serve e acessar o link criado.

***OBSERVAÇÕES:***

*1 - Durante a população do banco de dados, se não tiver o arquivo .env, mostrará uma mensagem que foi realizado muitas requisições via HTTP. Para contornar esse problema é só criar o .env falando que o banco de dados utilizado é o "sqlite", o local do arquivo "database/database.sql" e setar como debug*

*2 - O arquivo install.sh realiza varias instalações necessárias para o funcionamento do projeto.
Só é preciso ter o git instalado para ele funcionar. O ultimo comando é a criação do database/database.sqlite*

*3 - Algumas vezes durante o comando db:seed, o tempo de execução era alto, em torno de 20 minutos.*

*4 - Muito obrigado pela oportunidade.*