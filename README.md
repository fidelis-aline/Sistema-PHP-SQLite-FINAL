# Sistema-PHP-SQLite-FINAL
Sistema de Cadastro e Login em PHP com SQLite
1. Objetivo do Projeto

Este sistema foi desenvolvido com o objetivo de implementar um módulo simples de cadastro e autenticação de usuários utilizando PHP e SQLite. A aplicação permite o registro de novos usuários, login com validação de credenciais e controle básico de acesso, garantindo integridade e segurança dos dados.

2. Tecnologias Utilizadas
PHP (linguagem principal do backend)
SQLite (banco de dados leve e local)
HTML (estrutura das páginas)
CSS (estilização básica)
XAMPP (ambiente de execução local)
3. Estrutura do Projeto
/Sistema
│
├── cadastro.php
├── login.php
├── index.php
├── logout.php
├── conexao.php
├── database.sqlite
└── README.md
4. Funcionalidades
Cadastro de usuários
Validação de dados no formulário
Verificação de e-mail duplicado
Login com autenticação de usuário
Controle de sessão
Logout seguro
5. Validações do Sistema

O arquivo cadastro.php realiza validações antes de armazenar os dados no banco. Essas verificações garantem a consistência e segurança das informações.

As principais validações são:

Verificação de campos obrigatórios (nome, e-mail e senha)
Validação do formato do e-mail
Confirmação de senha
Verificação de e-mail já cadastrado no banco de dados
Impedimento de envio de dados incompletos

Somente após todas as validações serem aprovadas, o sistema permite o cadastro do usuário.

6. Segurança

O sistema utiliza criptografia de senha com password_hash() para armazenar senhas de forma segura no banco de dados, evitando o armazenamento em texto plano.

7. Banco de Dados (SQLite)

O banco de dados é local e armazenado no arquivo database.sqlite.

Estrutura da tabela:
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
);
8. Como Executar o Projeto
Instalar o XAMPP
Colocar a pasta do projeto dentro de htdocs
Iniciar Apache no XAMPP

Acessar no navegador:

http://localhost/nome-da-pasta
O banco SQLite será criado automaticamente ou utilizado se já existir
9. Considerações Finais

O sistema foi desenvolvido com foco em aprendizado de PHP e integração com banco de dados SQLite, aplicando conceitos básicos de autenticação, validação de dados e controle de sessão.
