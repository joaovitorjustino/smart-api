# Api Teste Pratico Dev. Jr. Smart Sistemas

## Sobre o projeto

Api desenvolvida para o teste prático, o projeto foi feito usando Laravel e MySQL.

Foi usado um servidor apache para rodar localmente a api.

A api consiste de CRUDs feitas para suportar as demandas do front-end.

## Funcionalidade

CRUD para Produto, Cliente, Marca e Venda.

## Como executar o projeto

###Após clonar o repositório siga os seguintes passos

Execute os comando
```
composer install
```
```
php artisan key:generate
```

Abra o .env e configure o Banco de Dados
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= `NOME DO BANCO DE DADOS`
DB_USERNAME= `NOME DO USUARIO`
DB_PASSWORD= `SENHA`
```
Gere as tabelas
```
php artisan migrate
```
Rode o Servidor
```
php artisan serve
```

## Recomendação

Front-end desenvolvida para essa api: <a href="https://github.com/joaovitorjustino/Smart_Sistemas_Teste">FRONT-END</a>




