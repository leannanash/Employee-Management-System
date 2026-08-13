# Employee Management System

A PHP + MySQL web application built with Laravel.

## Features

- User authentication
- Employee CRUD
- Employee summary
- Male/Female employee count
- Average employee age
- Total monthly salary

## Technologies

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Vite

## Installation

composer install
npm install

cp .env.example .env
php artisan key:generate

Configure the MySQL database in .env.

php artisan migrate
npm run build
php artisan serve