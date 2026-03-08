# Formulário de Contato CRUD (PHP + MySQL)

Projeto simples desenvolvido para demonstrar conceitos básicos de backend utilizando **PHP** e **MySQL**.

A aplicação permite que usuários enviem mensagens através de um formulário de contato, salvando os dados no banco de dados, listando-os em uma tabela e permitindo a exclusão dos registros.

---

## Funcionalidades

- Formulário de contato com:
  - Nome
  - E-mail
  - Mensagem
- Salvamento das mensagens no banco de dados
- Listagem das mensagens cadastradas
- Exclusão de registros
- Uso de **Prepared Statements** para segurança
- Uso de **variáveis de ambiente (.env)**
- Estrutura de projeto organizada (Controller + Model)

---

## Tecnologias Utilizadas

- PHP
- MySQL
- PDO
- Bootstrap
- Composer
- phpdotenv

---

## Estrutura do Projeto

```text
projeto-teste/
│
├── config/
│   └── database.php
├── controllers/
│   └── Mensagem.php
├── models/
│   └── MensagemController.php
├── vendor/               # Potes de dependências (Composer)
├── .env                  # Variáveis de ambiente
├── .env.example          # Variáveis de ambiente (Exemplo base)
├── .gitignore            # Arquivos ignorados para commit
├── composer.json         # Dependências do projeto para Composer
├── composer.lock         # Travamento de versões exatas do Composer
├── exluir.php            # Ação de exclusão do registro no DB
├── index.php             # Arquivo principal, contendo o formulário e  tabela html
├── README.md             # Documentação
└── salvar.php            # Ação de salvação do registro no DB
```

---

## Instalação

1. Clone o repositório:

```bash
git clone <url-do-repositorio>
cd projeto-teste
```

2. Instale as dependências do Composer:

```bash
composer install
```

3. Configure as variáveis de ambiente:

```bash
cp .env.example .env
```

Edite o arquivo `.env` com suas credenciais do banco de dados:

```env
DB_HOST=localhost
DB_NAME=seu_banco
DB_USER=seu_usuario
DB_PASS=sua_senha
```

4. Crie o banco de dados e a tabela:

```sql
CREATE DATABASE contato_db;

USE contato_db;

CREATE TABLE mensagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## Como Usar

1. Inicie o servidor embutido do PHP na pasta do projeto:

```bash
php -S localhost:8000
```

2. Acesse o formulário no navegador:

```text
http://localhost:8000
```

3. Preencha o formulário e clique em "Enviar Mensagem"

4. As mensagens serão salvas no banco de dados e listadas na tabela abaixo do formulário

5. Clique em "Excluir" para remover um registro

---

## Segurança

O projeto utiliza as seguintes medidas de segurança:

- **Prepared Statements** para prevenir SQL Injection
- **Variáveis de ambiente** para credenciais do banco de dados
- **Validação básica** dos dados do formulário

---

### Autor

Desenvolvido por Thiago Arthur