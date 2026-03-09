# Formulário de Contato CRUD (PHP + MySQL)

Projeto simples desenvolvido para demonstrar conceitos básicos de backend utilizando **PHP** e **MySQL**.

A aplicação permite que usuários enviem mensagens através de um formulário de contato, salvando os dados no banco de dados, listando-os em uma tabela, visualizando detalhes, e permitindo a edição e exclusão dos registros, além de possuir uma arquitetura moderna baseada em MVC.

---

## Funcionalidades

- CRUD completo (*Create, Read, Update, Delete*):
  - Inserção (Enviar mensagem)
  - Listagem (Ver todas as mensagens enviadas)
  - Visualização (Ver detalhes de uma mensagem específica)
  - Edição (Atualizar registros)
  - Exclusão (Remover um registro do sistema)
- Arquitetura **MVC** simplificada (**M**odels, **V**iews, **C**ontrollers)
- Roteamento dinâmico básico centralizado (`router.php`)
- **Flash Messages** (mensagens de feedback tratadas em sessões)
- Uso de **Prepared Statements** para reforçar a segurança contra SQL Injection
- Uso de **variáveis de ambiente (.env)**
- Ponto central de inicialização via `bootstrap.php`
- Componentização do layout da interface web (`header.php`, `footer.php`)
- Integração e uso de recursos estáticos (`public/css`, `public/js`)

---

## Tecnologias Utilizadas

- PHP
- MySQL
- PDO
- Bootstrap
- Bootstrap Icons
- Composer
- phpdotenv

---

## Estrutura do Projeto

```text
projeto-teste/
│
├── config/
│   └── database.php              # Conexão centralizada com o banco de dados
├── controllers/
│   └── MensagemController.php    # Lida com a lógica de negócio principal
├── helpers/
│   └── Flash.php                 # Utilitário para exibir mensagens de sessão (Flash messages)
├── models/
│   └── Mensagem.php              # Mapeamento do banco de dados e comandos SQL
├── public/                       # Arquivos estáticos de frontend
│   ├── css/
│   └── js/
├── views/                        # Arquivos da interface de usuário, servidos pelo roteador
│   ├── editar.php                # Tela de edição de um registro
│   ├── footer.php                # Rodapé do site
│   ├── header.php                # Cabeçalho do site
│   ├── listar.php                # Tabela listando as mensagens gravadas
│   └── visualizar.php            # Visualização detalhada do registro
├── vendor/               # Pacotes de dependências (Composer)
├── .env                  # Variáveis de ambiente configuradas
├── .env.example          # Variáveis de ambiente (Exemplo base)
├── .gitignore            # Arquivos ignorados para commit
├── atualizar.php         # Script responsável por tratar requisições de atualização (Update)
├── bootstrap.php         # Arquivo de inicialização, configuração de sessão e banco
├── composer.json         # Mapeamento do projeto para Composer
├── composer.lock         # Travamento de versões exatas do Composer
├── excluir.php           # Script responsável por requisições de remoção (Delete)
├── index.php             # Ponto de entrada (Entrypoint), invoca o roteador
├── README.md             # Documentação do projeto
├── router.php            # Manipulação do roteamento das páginas (via GET "?page=")
└── salvar.php            # Script responsável por requisições de salvamento (Create)
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
    data_atualizacao TIMESTAMP
);
```

---

## Como Usar

1. Inicie o servidor embutido do PHP na pasta do projeto:

```bash
php -S localhost:8000
```

2. Acesse a aplicação no navegador:

```text
http://localhost:8000
```

3. Explore o ciclo completo (CRUD):
   - **Inserir Registro**: Preencha o formulário e clique em "Enviar Mensagem" ou "Salvar"
   - **Listagem**: Todos os dados salvos estarão listados em tempo real na tela inicial.
   - **Editar/Atualizar**: Clique em "Editar" de um registro para alterar seu conteúdo
   - **Visualizar**: Clique na opção de visualização para verificar os dados do registro
   - **Remover**: Clique em "Excluir" para excluir um contato ou registro específico.

---

## Segurança

O projeto utiliza as seguintes medidas de segurança:

- **Prepared Statements** integrado via PDO para prevenir ataques de *SQL Injection*
- **Variáveis de ambiente** garantindo que as credenciais do banco não sejam expostas
- **Validação básica** dos dados do formulário e feedback das operações (via *Flash Messages*)

---

### Autor

Desenvolvido por Thiago Arthur