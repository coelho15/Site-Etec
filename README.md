# 📌 Projeto ETEC

## 🧾 Sobre o projeto

Este projeto é uma aplicação web desenvolvida utilizando o framework **Laravel**, com o objetivo de recriar o site da escola escolar.

Ele segue a arquitetura MVC (Model-View-Controller), garantindo organização, escalabilidade e manutenção mais fácil do código.

---

## 🚀 Tecnologias utilizadas

* PHP
* Laravel
* Blade (template engine do Laravel)
* SQLite (banco de dados padrão do projeto)
* Node.js + Vite (para build de assets)
* HTML, CSS e JavaScript

---

## 📂 Estrutura do projeto

* `app/` → Lógica principal da aplicação (Models, Controllers)
* `routes/` → Definição das rotas (web e console)
* `resources/` → Views (interface do usuário)
* `database/` → Banco de dados e migrations
* `public/` → Arquivos públicos (index.php, imagens, etc)
* `config/` → Configurações do sistema

---

## ⚙️ Como rodar o projeto

### 1. Clonar o repositório

```bash
git clone <url-do-repositorio>
cd etec
```

### 2. Instalar dependências

```bash
composer install
npm install
```

### 3. Configurar o ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Rodar o banco de dados

```bash
php artisan migrate
```

### 5. Iniciar o servidor

```bash
php artisan serve
npm run dev
```

A aplicação estará disponível em:
👉 [http://localhost:8000](http://localhost:8000)


## 💡 Observações

Projeto desenvolvido para fins acadêmicos (ETEC).

---

Se quiser, posso deixar isso ainda mais “profissional nível GitHub top” (com badges, gifs, descrição mais chamativa etc) — ou adaptar certinho pro que teu projeto realmente faz, só me conta o tema 👍
