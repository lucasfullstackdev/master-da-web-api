<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<br><br><br>

<h1 align="center">Carrinho de compras</h1>
<h4 align="center">Uma API REST para o gerenciamento de compras de produtos e seus clientes</h4>

## Sobre o projeto
Este projeto tem como finalidade atestar meus conhecimentos nos seguintes pontos:
- Desenvolvimento de aplicações LARAVEL
- Desenvolvimento de API's REST utilizando LARAVEL
- Roteamento com LARAVEL
- Eloquent ORM
- Autenticação com JWT

## Por que este projeto?
- Este projeto faz parte do meu portfólio pessoal, uma maneira de comprovar meus conhecimentos em LARAVEL
- A construção de API's faz parte da rotina de um desenvolvedor back-end, então esse projeto serviu como uma simulação da rotina real de um desenvolvedor back-end atuando com LARAVEL.

## Sobre a modelagem do Banco de Dados
- O desafio consistia na construção de uma API REST utilizando LARAVEL que simulasse um módulo de e-commerce.
- Para o desafio foram criadas as seguintes tabelas:
	- products
	- shopping

# Sobre as Rotas
## Produtos
```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/products

- Para listar todos os produtos
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/products/{id}

- Para listar um produto em específico
```

```php
Method: POST
Url: http://127.0.0.1:9000/api/v1/products

- Para Adicionar um novo produto
{
    "name": "Nome do produto",
    "price": 129.92
}
```

```php
Method: PUT
Url: http://127.0.0.1:9000/api/v1/products/{id}

- Para Atualizar um produto
{
    "name": "termostato digital - 2",
    "price": 129.92
}
```

```php
Method: DELETE
Url: http://127.0.0.1:9000/api/v1/products/{id}
```

## Clientes
```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/clients

- Para listar todos os clientes
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/clients/{id}

- Para listar um cliente em específico
```

```php
Method: POST
Url: http://127.0.0.1:9000/api/v1/clients

- Para Adicionar um novo cliente
{
    "name": "Nome do cliente",
    "email": "email.do.cliente@email.com.br",
    "password": "senha"
}
```

```php
Method: PUT
Url: http://127.0.0.1:9000/api/v1/clients/{id}

- Para Atualizar uma classificação
{
    "name": "Nome do cliente",
    "email": "email.do.cliente@email.com.br",
    "password": "senha"
}
```

```php
Method: DELETE
Url: http://127.0.0.1:9000/api/v1/clients/{id}
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/clients/{id}/shopping

- Para retornar as compras do cliente
```

## Compras
```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/shopping

- Para listar todas as compras
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/shopping/{id}

- Para listar uma compra em específico
```

```php
Method: POST
Url: http://127.0.0.1:9000/api/v1/shopping

- Para Adicionar uma nova compra
{
    "products": [
        {
            "name": "berço com colchão",
            "price": 439.71
        },
        {
            "name": "base nutribomba",
            "price": 338.9
        },
        {
            "name": "paralama bicicleta",
            "price": 586.83
        },
        {
            "name": "sapatilhas femininas moleca",
            "price": 314.3
        }
    ],
    "user_id": 1
}
```

## Observações importantes

## Setup
Para a configuração do projeto no seu ambiente local, algumas etapas precisam ser seguidas:

1. Criei um [repositório](https://github.com/lucasfullstackdev/development-environment) para que você possa rodar aplicações PHP/Vuejs de maneira mais simples utilizando [docker](https://www.docker.com/).

2. Siga as orientações do projeto [development-environment](https://github.com/lucasfullstackdev/development-environment) para que você possa criar os containers necessários para execução de seus projetos

## Observações importantes
- O valor  **total** de uma compra (shopping) é calculado automaticamente ao passar os produtos relacionados a determinada compra
- É aconselhável que você tenha em sua máquia o [postman](https://www.postman.com/) para que possa fazer os devidos testes sobre as rotas disponíveis nesta API.

## Dependências e suas versões
- PHP 8.2.1
- LARAVEL 10x
- Composer 2.5.8
- Nodejs 19

## Considerações finais
- Esta API não representa uma amostra real, devendo ser utilizada apenas para se ter uma noção sobre como funciona um API REST.
- Qualquer dúvida ou sugestão, entre em contato pelo e-mail: lucas.fullstack.dev@gmail.com
