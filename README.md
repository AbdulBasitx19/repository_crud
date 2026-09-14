# 🏗️ Laravel CRUD with Repository Pattern

A professional Laravel CRUD application built using the **Repository Pattern** architecture, demonstrating clean code principles, separation of concerns, and dependency injection.

## 🎯 Project Overview

This project implements a complete CRUD (Create, Read, Update, Delete) system for managing Posts using advanced architectural patterns:
- **Repository Pattern**: Separates data access logic from business logic.
- **Service Layer**: Handles business logic independently.
- **Dependency Injection**: Ensures loose coupling between components.
- **Form Requests**: Dedicated validation classes for clean controllers.
- **Thin Controllers**: Controllers only handle HTTP request/response concerns.

## 🚀 Features

- ✅ **Clean Architecture**: Well-organized code following SOLID principles.
- ✅ **Repository Pattern**: Database operations strictly isolated in the Repository layer.
- ✅ **Service Layer**: Business logic separated from controllers and data access.
- ✅ **Interface-Based Design**: Contract-driven development for easy scalability.
- ✅ **Dependency Injection**: Automatic dependency resolution via Laravel Service Container.
- ✅ **Form Request Validation**: Dedicated validation classes for Store & Update operations.
- ✅ **Thin Controllers**: Minimalist controllers focusing only on routing and responses.
- ✅ **Manual Routes**: Explicit `GET`, `POST`, `PUT`, `DELETE` route definitions (No `Route::resource`).
- ✅ **Responsive UI**: Clean, modern interface built with Vanilla HTML/CSS.

## 🛠️ Tech Stack

- **Backend**: Laravel 11.x, PHP 8.2+
- **Database**: MySQL
- **Frontend**: Blade Templates, Vanilla HTML/CSS
- **Architecture**: Repository Pattern, Service Layer, Dependency Injection
- **Version Control**: Git & GitHub

## 📂 Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── PostController.php              # Thin controller (request/response only)
│   └── Requests/
│       ├── StorePostRequest.php            # Validation for Create
│       └── UpdatePostRequest.php           # Validation for Update
├── Interfaces/
│   └── PostRepositoryInterface.php         # Contract/Blueprint
├── Repositories/
│   └── PostRepository.php                  # Database operations
├── Services/
│   └── PostService.php                     # Business logic layer
├── Models/
│   └── Post.php                            # Eloquent model
└── Providers/
    ├── AppServiceProvider.php              # Default (unchanged)
    └── RepositoryServiceProvider.php       # Interface-Repository binding

routes/
└── web.php                                 # Manual route definitions

database/
└── migrations/
    └── xxxx_create_posts_table.php         # Database schema

## 📦 Installation & Setup

### **Prerequisites**
- PHP 8.2 or higher
- Composer
- MySQL
- Git

### **Steps**

1. **Clone the repository**:
   ```bash
   git clone https://github.com/AbdulBasitx19/repository_pattern_crud.git
   cd repository_pattern_crud
2. **Install PHP dependencies**:
    composer install
3. **Setup Environment**:
    Copy .env.example to .env:
        cp .env.example .env
    Update database credentials in .env:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=repository_pattern_crud
        DB_USERNAME=root
        DB_PASSWORD=
4.  **Generate Application Key**:
       php artisan key:generate
5.  **Create Database**:
        CREATE DATABASE repository_pattern_crud;
6.  **Run Migrations**:
        php artisan migrate
7.  **Start Development Server**:
        php artisan serve





