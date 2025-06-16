<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">API RESTful com Yii2</h1>
    <br>
</p>

Esta API oferece funcionalidades CRUD (Create, Read, Update, Delete) para gerenciamento de produtos, servindo como um backend robusto para aplicações front-end.

Esta é uma API RESTful de exemplo construída utilizando o framework PHP Yii2. O objetivo principal deste projeto é demonstrar a criação de serviços back-end robustos, seguindo boas práticas de desenvolvimento e arquitetura, e servir como base para integração com aplicações front-end modernas (como um futuro projeto em Angular/VueJS).

O Yii 2 Advanced Project Template [Yii 2](https://www.yiiframework.com/) foi usado como base.

## Endpoints

---

A API de Produtos expõe os seguintes endpoints principais para gerenciamento de recursos:

* **`GET /api/produtos`**: Lista todos os produtos cadastrados. Suporta paginação e filtros (para futuros aprimoramentos).
* **`GET /api/produtos/{id}`**: Retorna os detalhes de um produto específico pelo ID.
* **`POST /api/produtos`**: Cria um novo produto.
    * **Corpo da Requisição (JSON)**:
        ```json
        {
            "nome": "Nome do Produto",
            "descricao": "Uma breve descrição do produto.",
            "preco": 99.99,
            "estoque": 100
        }
        ```
    * **Resposta**: Retorna o objeto do produto criado, incluindo seu ID e timestamps.
* **`PUT /api/produtos/{id}`**: Atualiza *completamente* um produto existente pelo ID. Todos os campos são obrigatórios.
    * **Corpo da Requisição (JSON)**:
        ```json
        {
            "nome": "Novo Nome do Produto",
            "descricao": "Descrição atualizada.",
            "preco": 109.99,
            "estoque": 90
        }
        ```
    * **Resposta**: Retorna o objeto do produto atualizado.
* **`DELETE /api/produtos/{id}`**: Remove um produto existente pelo ID.
    * **Resposta**: Retorna um status de sucesso (204 No Content ou 200 OK com mensagem vazia/sucesso).

## Tecnologias utilizadas

---

* **PHP**: Linguagem de programação principal.
* **Yii2 Framework**: Framework MVC robusto para desenvolvimento web.
* **MySQL / MariaDB**: Sistema de gerenciamento de banco de dados relacional.
* **Composer**: Gerenciador de dependências para PHP.
* **Git**: Sistema de controle de versão.

## Como rodar localmente

---

Siga os passos abaixo para configurar e rodar a API em seu ambiente local.

### Pré-requisitos

Certifique-se de ter instalado em sua máquina:

* **PHP** (versão 7.4 ou superior, recomendado PHP 8.x)
* **Composer**
* Um **Servidor de Banco de Dados** (MySQL/MariaDB)

### Instalação

1.  **Clone o Repositório:**
    ```bash
    git clone [https://github.com/andrewschiozo/yii2-api-rest.git](https://github.com/andrewschiozo/yii2-api-rest.git)
    cd yii2-api-rest
    ```

2.  **Instale as Dependências do Composer:**
    ```bash
    composer install
    ```

3.  **Inicialize a Aplicação:**
    ```bash
    php init
    ```
    Escolha `dev` para o ambiente de desenvolvimento.

4.  **Configure o Banco de Dados:**
    * Crie um banco de dados vazio no seu servidor MySQL/MariaDB (ex: `yii2_api_db`).
    * Edite o arquivo `common/config/main-local.php` e configure as credenciais do seu banco de dados:
        ```php
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=yii2_api_db',
            'username' => 'root',
            'password' => 'sua_senha',
            'charset' => 'utf8',
        ],
        ```

5.  **Execute as Migrations do Banco de Dados:**
    Isso criará a tabela `produtos` e outras tabelas necessárias.
    ```bash
    php yii migrate
    ```
    Confirme com `yes` quando solicitado.

6.  **Configure o Servidor Web:**

    * **Usando o Servidor Web Integrado do PHP (para testes rápidos):**
        Você pode rodar um servidor web simples para testar sua API:
        ```bash
        php -S localhost:8080 -t backend/web
        ```
        A API estará acessível em `http://localhost:8080/api/produtos`.

## Testando

---

Após configurar o projeto, você pode testar os endpoints usando ferramentas como [Postman](https://www.postman.com/downloads/), [Insomnia](https://insomnia.rest/download), ou extensões REST Client no VS Code (como o [Thunder Client](https://marketplace.visualstudio.com/items?itemName=rangav.vscode-thunder-client) ou Rapi API).

* **URL Base:** `http://localhost:8080/api`

* **Forçando JSON no Navegador:** Se o navegador estiver retornando XML, você pode adicionar `?_format=json` ao final da URL para forçar o retorno em JSON, por exemplo: `http://localhost:8080/api/produtos?_format=json`.

## Próximos passos e futuras melhorias

---

Este projeto serve como uma base sólida e tem planos para futuras melhorias:

* **Integração Frontend:** Conectar esta API com uma aplicação front-end desenvolvida em Angular/VueJS para criar uma experiência completa.
* **Autenticação e Autorização:** Implementar mecanismos de segurança como JWT (JSON Web Tokens) para proteger os endpoints da API.
* **Testes Automatizados:** Adicionar testes de unidade e integração para garantir a robustez e confiabilidade do código.
* **Dockerização:** Criar um ambiente Docker para facilitar o setup e deploy do projeto.
* **Arquitetura Hexagonal:** Explorar e aplicar padrões de arquitetura mais avançados para melhor organização e separação de camadas.