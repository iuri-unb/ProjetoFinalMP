# Leia-me #

ProjetoFinalPAA

### O nosso link principal? ###

* Laravel
* Versão 1.0.0

## Copie o exemplo e passe as informações do banco de dados ##
* `cp .env.example .env`

## Baixando as bibliotecas necessárias ##
* `composer install`

## Criar as Tabelas no banco de dados: ###
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan config:clear`
* `php artisan config:cache`

## Atualizar as tabelas ###
* `php artisan migrate:refresh`

## Atualizar as tabelas e inserindo dados###
* `php artisan migrate:refresh --seed`

## Inserir dados em uma tabela expecifica
* `php artisan db:seed --class=UsersSeeder`

## Caso precise gerar novamente o dumpautoload das classes novas
* `Exemplo: Cridou a classe UsersSeeder tem que rodar o comando abaixo e em seguida`
* `composer dumpautoload -o`
* `php artisan db:seed --class=UsersSeeder`

## Permissões nas pastas 
* `sudo chgrp -R www-data storage`
* `sudo chmod -R ug+rwx storage`
