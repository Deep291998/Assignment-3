

# Cricket player info

This Laravel project is designed to manage cricketer details, including matches, total runs, wickets, name, country, age, and centuries.

## Features

- **Create:** Add new cricketer details to the database.
- **Read:** View cricketer details, including matches, runs, wickets, country, age, and centuries.
- **Update:** Edit existing cricketer information.
- **Delete:** Remove cricketer records from the database.

## Installation

1. Clone the repository: `git clone https://github.com/Deep291998/Assignment-3.git`
2. Navigate to the project directory: `cd cric-info`
3. Install dependencies: `composer install`
4. Copy `.env.example` to `.env` and configure your database settings.
5. Generate application key: `php artisan key:generate`
6. Migrate the database: `php artisan migrate`
7. Seed the database (optional): `php artisan db:seed`

## Usage

1. Start the development server: `php artisan serve`
2. Access the application in your browser: `http://localhost:8000`
3. Register a new account or log in if you already have one.
4. Navigate to the cricketer management section to perform CRUD operations.

## Technologies Used

- Laravel
- PHP
- MySQL
