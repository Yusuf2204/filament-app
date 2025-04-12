<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this Application

This application is built with **Laravel**, utilizing **Filament** as the admin panel and **Livewire** to deliver a smooth **Single Page Application (SPA)** experience.

The main focus is on building an intuitive and responsive admin panel that enables efficient management through the Filament framework while keeping the user interface fast and dynamic with Livewire for SPA behavior.

Key features include:
- **Filament Admin Panel**: A powerful and easy-to-use admin interface built with Filament for managing data and users.
- **Livewire SPA**: The application uses Livewire to handle dynamic content updates without the need for full page reloads, providing a seamless and fast experience.
- **Easy-to-use Interface**: Simplifies common admin tasks with a clean and efficient UI.
- **Role Management**: Control access through roles with permissions that you can manage directly from the admin panel.

## Features

- **Filament Admin Panel**: A modern admin panel solution with built-in components for easy management.
- **Livewire SPA**: Leverages Livewire to enable reactive and dynamic page updates without refreshing the browser.
- **Easy-to-use Interface**: Simplifies common admin tasks with a clean and efficient UI.
- **Role Management**: Control access through roles with permissions that you can manage directly from the admin panel.

## Getting Started

To get a local copy of the project up and running, follow these simple steps.

### Prerequisites

- PHP >= 8.0
- Laravel >= 9.x
- Composer
- Node.js and NPM (for asset compilation)

### Installation

1. Clone the repository:

   ```bash
   git clone 
   cd 
   ```
2. Install Dependencies
    ```
    composer install
    npm install
    ```
3. setup env
4. generate key
    ```
    php artisan key:generate
    ```
5. run migration
    ```
    php artisan migrate:fresh
    php artisan db:seed
    ```
6. Run Aplication
    ```
    php artisan serve
    make sure to direct here
    http://127.0.0.1:8000/admin
    ```
