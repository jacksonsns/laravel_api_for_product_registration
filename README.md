# laravel_api_for_product_registration

**Nome**: laravel api for product registration

**Descrição**: Micro api em Laravel para cadastro e gerenciamento de produtos.

## Requisitos

- PHP 8.1 ou superior
- Guzzle HTTP 7.2 ou superior
- Laravel Framework 10.10 ou superior
- Laravel Sanctum 3.2 ou superior
- Laravel Tinker 2.8 ou superior

## Requisitos de desenvolvimento

- Faker PHP 1.9.1 ou superior
- Laravel Pint 1.0 ou superior
- Laravel Sail 1.18 ou superior
- Mockery 1.4.4 ou superior
- NunoMaduro Collision 7.0 ou superior
- PHPUnit 10.1 ou superior
- Spatie Laravel Ignition 2.0 ou superior

## Instalação

1. Clone o repositório do GitHub em sua máquina local.
2. Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.
3. Execute o comando `docker-compose up -d` para iniciar os contêineres do Docker.
4. Acesse o terminal do contêiner Laravel executando `docker-compose exec app bash`.
5. Execute os seguintes comandos no terminal do contêiner:
   ```shell
   cp .env.example .env
   php artisan key:generate
   composer install
   php artisan migrate
   php artisan db:seed --class=CategorySeeder
6. Certifique-se de que o servidor web esteja configurado corretamente para apontar para a pasta public do aplicativo Laravel.

## Rotas
Produtos
- GET /products - Retorna todos os produtos.
- GET /products/{id} - Retorna um produto específico.
- POST /products - Cria um novo produto.
- PUT /products/{id} - Atualiza um produto existente.
- DELETE /products/{id} - Exclui um produto existente.

Autenticação
- POST /login - Faz o login do usuário.
- POST /register - Registra um novo usuário.
Categorias
- GET /categories - Retorna todas as categorias.

