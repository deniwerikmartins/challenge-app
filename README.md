<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## API Challenge

O ambiente para a API pode ser iniciado com o comando `docker-compose up` no terminal

## Alimentando o banco

Uma vez o ambiente tendo os containers rodando é possivel acessar container da aplicação com o comando `docker-compose exec backend sh`

para criar a tabela no banco deve-se executar o comando `php artisan migrate`

para o caso de carga de dados no banco pode ser usado o comando para utilizar o seed `php artisan db:seed`

ou então apenas o comando para criar a tabela e fazer a carga de dados `php artisan migrate --seed`


## Testes

Para testes manuais dos recursos criados pode-se acessar nos seguintes endpoints

GET       | http://localhost:8000/api/aparelhos

POST      | http://localhost:8000/api/aparelhos

GET       | http://localhost:8000/api/aparelhos/{aparelho}

PUT       | http://localhost:8000/api/aparelhos/{aparelho}

DELETE    | http://localhost:8000/api/aparelhos/{aparelho}

### Documentação

Pode-se acessar uma documentação OpenApi Swagger e também testar a aplicação acessando a url: http://localhost:8000/api/documentation
