# Chirper - Laravel Bootcamp Course Project

This is the complete implementation of the "Getting Started with Laravel" course from the official Laravel documentation (https://laravel.com/learn/getting-started-with-laravel).

## Course Modules

1. **Setting up your Laravel project** - Installation and project setup
2. **Your first route** - Routes, views, and Blade templates
3. **What is MVC?** - Controllers and MVC pattern
4. **Working with the database** - Migrations and database setup
5. **Our first model** - Eloquent models and relationships
6. **Showing the feed** - Blade components and styling
7. **Creating and storing Chirps** - Forms, validation, and storage
8. **Edit and delete Chirps** - Full CRUD operations
9. **Basic authentication: Registration** - User registration
10. **Basic authentication: Login/Logout** - Complete authentication system

## Features

- ✅ Full CRUD for Chirps (Create, Read, Update, Delete)
- ✅ User authentication (Register, Login, Logout)
- ✅ Authorization (users can only edit/delete their own chirps)
- ✅ Database migrations and seeders
- ✅ Eloquent relationships
- ✅ Form validation with custom messages
- ✅ Flash messages for success/error feedback
- ✅ Responsive UI with Tailwind CSS and DaisyUI
- ✅ MySQL database support

## Requirements

- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js & NPM

## Installation

1. Clone the repository:
```bash
git clone https://github.com/AmyFS0/chirper.git
cd chirper
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install JavaScript dependencies:
```bash
npm install
```

4. Configure environment:
```bash
cp .env.example .env
# Edit .env with your database credentials
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run migrations and seeders:
```bash
php artisan migrate --seed
```

7. Build assets:
```bash
npm run build
```

8. Start the development server:
```bash
php artisan serve
```

Visit http://localhost:8000 to see the application.

## Project Structure

```
chirper/
├── app/
│   ├── Http/Controllers/
│   │   ├── ChirpController.php
│   │   └── Auth/
│   │       ├── Register.php
│   │       ├── Login.php
│   │       └── Logout.php
│   ├── Models/
│   │   ├── User.php
│   │   └── Chirp.php
│   ├── Policies/
│   │   └── ChirpPolicy.php
│   └── Providers/
│       └── AuthServiceProvider.php
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   └── 0001_01_01_000001_create_chirps_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ChirpSeeder.php
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── layout.blade.php
│   │   │   └── chirp.blade.php
│   │   ├── chirps/
│   │   │   └── edit.blade.php
│   │   ├── auth/
│   │   │   ├── register.blade.php
│   │   │   └── login.blade.php
│   │   └── home.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── routes/
│   ├── web.php
│   └── console.php
└── config/
    ├── app.php
    ├── database.php
    ├── auth.php
    └── session.php
```

## Database Configuration

The project is configured to use MySQL. Update your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chirper
DB_USERNAME=root
DB_PASSWORD=
```

## GitHub Repository

This project is hosted at: https://github.com/AmyFS0/chirper

## License

This project is open-sourced software licensed under the MIT license.