# login_laravel

Sistema simples de autenticação de usuários feito em Laravel.

## Descrição

Este projeto é um sistema de login, cadastro e recuperação de senha para usuários, utilizando o framework Laravel. Ele inclui telas para cadastro, login, edição de perfil e recuperação de senha, com interface moderna baseada em Bootstrap.

## Funcionalidades

- Cadastro de usuário
- Login de usuário
- Recuperação de senha por email
- Edição de dados do usuário
- Logout

## Requisitos

- PHP >= 8.0
- Composer
- MySQL ou outro banco de dados suportado pelo Laravel
- Extensões PHP necessárias para Laravel

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/gabriel-ortolani/login_laravel.git
   cd login_laravel
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, principalmente as de conexão com o banco de dados.

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Execute as migrações para criar as tabelas no banco:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

7. Acesse `http://localhost:8000` no navegador.

## Observações

- O projeto utiliza Bootstrap 5 para o frontend.
- As senhas são armazenadas de forma segura utilizando hash.
- O sistema pode ser expandido para incluir autenticação por email, confirmação de cadastro, etc.

