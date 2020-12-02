# Leia-me #

ProjetoFinalPAA

### O nosso link principal? ###

* Laravel
* Versão 1.0.0

## Passo 1 - Copie o exemplo e passe as informações do banco de dados, no exemplo estamos usando sqlite ##
* `cp database.sqlite database/`
* `cp .env.example .env`

## Passo 2 - Baixando as bibliotecas necessárias ##
* `composer install`

## Passo 3 - Criar as Tabelas no banco de dados: ###
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan config:clear`
* `php artisan config:cache`

## Passo 4 - Permissões nas pastas 
* `sudo chgrp -R www-data storage`
* `sudo chmod -R ug+rwx storage`

## Caso haja necessidade atualizar as tabelas ###
* `php artisan migrate:refresh`

## Caso haja necessidade atualizar as tabelas e inserindo dados ###
* `php artisan migrate:refresh --seed`

## Caso haja necessidade de inserir dados em uma tabela expecifica
* `php artisan db:seed --class=UsersSeeder`

## Caso haja necessidade de gerar novamente o dumpautoload das classes novas
* `Exemplo: Cridou a classe UsersSeeder tem que rodar o comando abaixo e em seguida`
* `composer dumpautoload -o`
* `php artisan db:seed --class=UsersSeeder`
