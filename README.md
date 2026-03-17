# 📚 Laravel CRUD Books

A simple CRUD (Create, Read, Update, Delete) application for managing book data, built with **Laravel 12**.
## 📸 Preview
![App Preview](https://github.com/ilmalyakinn/assets/blob/851d3cabe72703b4becc43e7ad33b8dd7b5eef73/laravel%20Crud.png)

> *Book List page view with add, edit, and delete features.*

---

## ✨ Features

- 📖 View a list of books (title, author, year)
- ➕ Add new books via form
- ✏️ Edit existing book data
- 🗑️ Delete books
- Simple and clean UI with Bootstrap

---

## 🛠️ Tech Stack

| Layer      | Technology        |
|------------|-------------------|
| Backend    | Laravel 12 (PHP)  |
| Frontend   | Blade + Bootstrap |
| Database   | MySQL             |
| Dev Server | PHP Artisan Serve |

---

## ⚙️ Requirements

Before getting started, make sure you have the following installed:

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Node.js & npm (optional, for asset compilation)

---

## 🚀 Installation & Setup

Follow these steps to run the project locally:

### 1. Clone the repository

```bash
git clone https://github.com/ilmalyakin-n/laravel-crud-books.git
cd laravel-crud-books
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Copy and configure environment file

```bash
cp .env.example .env
```

Then open `.env` and update the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud_books
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Create the database

Create a new MySQL database named `laravel_crud_books` (or match whatever name you set in `.env`).

### 6. Run migrations

```bash
php artisan migrate
```

### 7. (Optional) Seed dummy data

```bash
php artisan db:seed
```

### 8. Start the development server

```bash
php artisan serve
```

Open your browser and visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📁 Project Structure

```
laravel-crud-books/
├── app/
│   ├── Http/Controllers/   # CRUD logic
│   └── Models/             # Eloquent models
├── database/
│   └── migrations/         # Database schema
├── resources/
│   └── views/              # Blade templates
├── routes/
│   └── web.php             # Web routes
└── .env.example            # Environment config template
```
---

## 📄 License

This project is open-sourced under the [MIT License](https://opensource.org/licenses/MIT).

---

## 👤 Author

**Ilmal Yakin**  
GitHub: [@ilmalyakin-n](https://github.com/ilmalyakin-n)
