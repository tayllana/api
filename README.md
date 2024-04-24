# API Notes
Este é um projeto simples de API RESTful para gerenciar notas. 

## Funcionalidades

Com esta API, é possível realizar as seguintes operações:

- Listar todas as notas
- Obter informações de uma nota específica
- Inserir uma nova nota
- Atualizar uma nota existente
- Deletar uma nota
  
## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

### 📋 Pré-requisitos

Para instalar e executar este software, você precisará das seguintes ferramentas:

- PHP 7.4 ou superior
- phpMyAdmin (opcional, para gerenciamento de banco de dados MySQL)
- PDO (PHP Data Objects)
- servidor web como Apache ou Nginx

Certifique-se de ter todas essas ferramentas instaladas e configuradas antes de prosseguir com a instalação do software.

### 🔧 Instalação

1. Clone este repositório para sua máquina local.

| Tipo  | Link |
| ------------- | ------------- |
| HTTPS  | https://github.com/tayllana/api_notes.git  |
| SSH  | git@github.com:tayllana/api_notes.git  |
| Github CLI  | gh repo clone tayllana/api_notes  |

2. Configure o banco de dados MySQL e atualize o arquivo `config.php` com suas credenciais de banco de dados.
```
<?php 
$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];
```
3. Execute no banco de dedos local o [DDL](https://github.com/tayllana/api_notes/blob/main/devsnotes.sql) 
   
4. Execute o servidor PHP localmente.

## ⚙️ Executando os testes

Use um cliente HTTP como Postman ou [RestTest](https://resttesttest.com/) para enviar solicitações HTTPS

### 🔩 Endpoints

| Request  | URL | Route |
| ------------- | ------------- | ------------- |
| GET  | api/notes  | [getAll](https://github.com/tayllana/api_notes/blob/main/api/getAll.php) |
| GET  | /api/note/{id}  | [get](https://github.com/tayllana/api_notes/blob/main/api/get.php) |
| POST  | /api/note  | [insert](https://github.com/tayllana/api_notes/blob/main/api/insert.php) |
| PUT  | /api/note/{id}  | [update](https://github.com/tayllana/api_notes/blob/main/api/update.php) |
| DELETE  | /api/note/{id}  | [delete](https://github.com/tayllana/api_notes/blob/main/api/delete.php) |


## 🛠️ Construído com

* [PHP](https://www.php.net/) - Linguagem de programação usada
* [xampp](https://www.apachefriends.org/pt_br/index.html) - Servidor local
* [PHPMyAdmin](https://www.phpmyadmin.net/) - Banco de dados usado

## ✒️ Autores
* **DEV** - [Tayllana Wislla](https://github.com/tayllana/)

## 🎁 Expressões de gratidão

* Conte a outras pessoas sobre este projeto 📢;
* Um agradecimento publicamente 🫂;
* etc.


---
⌨️ com ❤️ por  [Tayllana Wislla](https://github.com/tayllana/) 😊
