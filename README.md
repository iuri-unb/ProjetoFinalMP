# Leia-me #

ProjetoFinalPAA

### O nosso link principal? ###

* Laravel
* Versão 1.0.0

## Passo 1 - Copie o exemplo e passe as informações do banco de dados, no exemplo estamos usando sqlite ##
* `cp database.sqlite database/`
* `cp .env.example .env`

## Passo 2 - Baixando as bibliotecas necessárias ##
* `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer   verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
* `php composer-setup.php`
* `php -r "unlink('composer-setup.php');"`
* `sudo apt install composer`
* `composer install`

## Passo 3 - Criar as Tabelas no banco de dados: ###
* `php artisan key:generate`
* `php artisan migrate`
* `php artisan config:clear`
* `php artisan config:cache`

## Passo 4 - Permissões nas pastas 
* `sudo chgrp -R www-data storage`
* `sudo chmod -R ug+rwx storage`

## Passo 5 - Executar o server
* `php aritsan serve`

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
