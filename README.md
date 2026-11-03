# Simple CRUD PHP

Aplicação CRUD de usuários desenvolvida em PHP puro, usando orientação a
objetos, PDO e MySQL. A aplicação permite cadastrar, listar, editar e excluir
usuários.

## Requisitos

- PHP 8.0 ou superior
- MySQL 5.7+ ou MariaDB
- Extensão `pdo_mysql` habilitada no PHP

Não há dependências instaladas via Composer.

## Configuração do banco de dados

Crie o banco e a tabela `users` no MySQL:

```sql
CREATE DATABASE crudapi
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE crudapi;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);
```

Por padrão, a aplicação usa:

| Configuração | Valor |
| --- | --- |
| Host | `localhost` |
| Usuário | `root` |
| Senha | vazia |
| Banco | `crudapi` |

Se necessário, altere esses valores em
`App/Config/Database.php`.

## Como executar

Na raiz do projeto, inicie o servidor embutido do PHP:

```bash
php -S localhost:8000 -t App
```

Depois, acesse <http://localhost:8000/>.

Também é possível configurar a pasta `App` em um servidor Apache ou Nginx com
suporte a PHP.

## Rotas

As operações são controladas pelo parâmetro `route` em `App/index.php`:

| Operação | URL |
| --- | --- |
| Listar usuários | `/?route=index` |
| Criar usuário | `/?route=create` |
| Editar usuário | `/?route=edit&id=1` |
| Excluir usuário | `/?route=delete&id=1` |

Quando nenhuma rota é informada, a listagem de usuários é exibida.

## Estrutura do projeto

```text
App/
├── Config/
│   └── Database.php       # Conexão com o MySQL via PDO
├── Controller/
│   └── UserController.php # Regras das ações e carregamento das views
├── Model/
│   └── User.php           # Operações CRUD na tabela users
├── View/
│   ├── create_user.php    # Formulário de cadastro
│   ├── edit_user.php      # Formulário de edição
│   └── home.php           # Listagem de usuários
└── index.php              # Ponto de entrada e roteamento
```

## Funcionamento

1. `App/index.php` identifica a rota solicitada.
2. `UserController` recebe a requisição e chama o model apropriado.
3. `User` executa as operações no banco usando consultas preparadas com PDO.
4. As views renderizam os formulários e a listagem de usuários.

