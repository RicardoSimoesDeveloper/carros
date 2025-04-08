# 🚗 Sistema de Cadastro de Carros

Este é um sistema simples de CRUD para **cadastro de carros**, desenvolvido com **Laravel 10** (backend) e **Blade** (frontend). O objetivo do projeto é permitir o gerenciamento de uma lista de carros, com funcionalidades de criação, listagem, edição e exclusão.

## 🔧 Tecnologias Utilizadas

- **PHP 8+**
- **Laravel 10**
- **Blade (Laravel Templates)**
- **MySQL**
- *CSS*
- **HTML**
- **Composer**
- **Git**

## 🎯 Funcionalidades

- ✅ Cadastro de novos carros
- ✅ Listagem de todos os carros
- ✅ Edição de dados dos carros
- ✅ Exclusão de carros
- ✅ Validação de dados no formulário
- ✅ Interface simples e intuitiva

## ⚙️ Como Executar Localmente

### 1. Clone o repositório

```bash
git clone https://github.com/RicardoSimoesDeveloper/carros.git
cd carros


composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve



