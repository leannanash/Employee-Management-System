# Employee Management System

A PHP + MySQL web application built with Laravel for managing employee records and viewing employee summaries.

## Features

* User authentication
* Employee CRUD operations
* Employee summary dashboard
* Male and female employee count
* Average employee age
* Total monthly salary

## Technologies

* Laravel
* PHP
* MySQL
* Blade
* Tailwind CSS
* Vite

## Installation

### 1. Clone the repository
git clone YOUR_GITHUB_REPOSITORY_URL
cd Employee-Management-System

### 2. Install dependencies
composer install
npm install

### 3. Configure the environment
Create the `.env` file from the example:
copy .env.example .env

Generate the Laravel application key:
php artisan key:generate

### 4. Configure MySQL
Open the `.env` file and configure your MySQL database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employee_management
DB_USERNAME=root
DB_PASSWORD=

Make sure the `employee_management` database exists in MySQL before continuing.

### 5. Run database migrations
php artisan migrate


### 6. Build frontend assets
npm run build

### 7. Start the application
php artisan serve

The application will be available at:
http://127.0.0.1:8000

## Setup Flow

Clone Repository
       ↓
composer install
       ↓
npm install
       ↓
Create .env
       ↓
php artisan key:generate
       ↓
Configure MySQL
       ↓
php artisan migrate
       ↓
npm run build
       ↓
php artisan serve

## Application Flow

Login
  ↓
Dashboard / Summary
  ↓
Employee Management
  ├── Create Employee
  ├── View Employees
  ├── Edit Employee
  └── Delete Employee

## Employee Fields

Each employee record contains:

* First Name
* Last Name
* Gender
* Birthday
* Monthly Salary

## Summary

The dashboard provides the following employee statistics:

* Total male employees
* Total female employees
* Average age of employees
* Total monthly salary

## Project Structure


app/
├── Http/
│   └── Controllers/
├── Models/
│   └── User.php
│
database/
├── migrations/
└── seeders/
│
resources/
├── css/
├── js/
└── views/
│
routes/
├── web.php
└── console.php
│
public/
│
composer.json
package.json
vite.config.js


## Notes

* The `.env` file is not included in the repository and must be created locally.
* Make sure MySQL is running before running the migrations.
* Do not commit database credentials or other sensitive environment variables to the repository.

## License

This project was created as a Laravel mini-project for demonstration.
