# 🚀 Backend - API Laravel para CRUD de Motos

Este projeto é uma API RESTful desenvolvida em Laravel 12.1 para gerenciamento de motocicletas.

## ✅ Requisitos

- PHP 8.2
- Composer
- MySQL
- Laravel 12.1


## 🔧 Instalação

```bash
git clone https://github.com/codefull425/CRUD-motocicletas
composer install
php artisan migrate
php artisan serve
```


## 🗃️ Estrutura da API

A API responde em **JSON** e utiliza as seguintes rotas:

| Método | Rota              | Descrição                 |
|--------|-------------------|---------------------------|
| GET    | /api/motos        | Listar todas as motos     |
| POST   | /api/motos        | Criar nova moto           |
| GET    | /api/motos/{id}   | Detalhar uma moto         |
| PUT    | /api/motos/{id}   | Atualizar dados da moto   |
| DELETE | /api/motos/{id}   | Remover moto              |

## 🧪 Testes

```bash
php artisan test
```

## ⚙️ Model

A entidade `Moto` possui os campos:

- `marca` (string)
- `modelo` (string)
- `ano` (int)
- `preco` (decimal)

## 📂 Migrations

As migrations criam a tabela `motos` com os campos necessários para o funcionamento da API.
