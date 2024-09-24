
# Sistema Web de Agenda de Contatos com Laravel

Este é um sistema simples de cadastro de usuários, login e agenda de contatos, desenvolvido em Laravel com conexão ao banco de dados MySQL.

## Pré-requisitos

- PHP >= 8.0
- Composer
- MySQL
- phpMyAdmin (opcional, para gerenciamento do banco de dados)

## Instalação

1. Clone o repositório para o seu ambiente local:

    ```
    git clone https://seu-repositorio-url.git
    ```

2. Entre no diretório do projeto:

    ```
    cd nome_do_projeto
    ```

3. Instale as dependências do projeto:

    ```
    composer install
    ```

4. Copie o arquivo `.env.example` para `.env`:

    ```
    cp .env.example .env
    ```

5. No arquivo `.env`, configure as informações do seu banco de dados MySQL:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=agenda
    DB_USERNAME=root
    DB_PASSWORD=sua_senha
    ```

6. Gere a chave da aplicação:

    ```
    php artisan key:generate
    ```

7. Crie o banco de dados `agenda` no **phpMyAdmin** ou no seu cliente MySQL favorito.

8. Execute as migrações para criar as tabelas no banco de dados:

    ```
    php artisan migrate
    ```

9. Inicie o servidor local:

    ```
    php artisan serve
    ```

10. Abra o navegador e acesse o endereço:

    ```
    http://localhost:8000
    ```

## Testar Conexão com o Banco de Dados

Para garantir que a conexão com o banco de dados está funcionando corretamente, acesse a seguinte rota:

```
http://localhost:8000/teste-conexao
```

Se a conexão estiver correta, você verá a mensagem "Conexão com o banco de dados MySQL está funcionando corretamente!".

## Funcionalidades

- Cadastro de usuários
- Login
- Cadastro e gestão de contatos (nome, telefone, e-mail e endereço)
- Cada usuário pode acessar apenas seus contatos
- Validação de dados
- Envio de e-mails para recuperação de senha
