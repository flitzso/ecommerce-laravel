# Ecommerce em Laravel #

Este é um projeto de e-commerce desenvolvido com o framework Laravel. O projeto inclui funcionalidades básicas de um e-commerce, como listagem e exibição de produtos, busca de produtos, login e registro de clientes, gerenciamento de carrinho de compras e um painel administrativo para gerenciamento de produtos e clientes.

## Requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e npm
- Servidor web (como Apache ou Nginx)
- Banco de dados MySQL

## Instalação

### Clonar o Repositório

Clone este repositório para sua máquina local:

```bash
cd ecommerce-laravel

composer install

npm install

cp .env.example .env

APP_NAME="E-commerce Laravel"
APP_ENV=local
APP_KEY=base64:gerado_pelo_comando_de_abaixo
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

php artisan key:generate

php artisan migrate

npm run dev

npm run build

php artisan serve

