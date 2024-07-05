# Cheque Management System

## Overview

This project is a private repository containing a Cheque Management System built using Laravel and MySQL. The system helps manage cheques, including their statuses and expiration dates, and provides a comprehensive dashboard for easy monitoring.

## Features

### Dashboard
- Displays important numbers such as:
  - Total cheques
  - Active cheques
  - Returned cheques
  - Expired cheques
  - Cheques expiring next month

### Data Viewing Pages
- **Dashboard**: Overview of important cheque-related metrics.
- **All Cheques**: View all cheques in the system.
- **Active Cheques**: View cheques that are currently active.
- **Returned Cheques**: View cheques that have been returned.
- **Expired Cheques**: View cheques that have expired.
- **Expiring Cheques**: View cheques that are expiring in the next month.

These pages utilize jQuery DataTables for enhanced data viewing and management.

### Authentication
The system supports different user roles with specific permissions:

- **Admin**
  - Full CRUD (Create, Read, Update, Delete) operations on cheques.
  - Full CRUD operations on users.
- **Superuser**
  - CRUD operations on cheques.
- **User**
  - Read-only access to cheques.

## Getting Started

### Prerequisites
- PHP
- Composer
- Laravel
- MySQL

### Installation
1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/cheque-management-system.git
    cd cheque-management-system
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Set up the environment file:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure your database in the `.env` file.

5. Run migrations:
    ```sh
    php artisan migrate
    ```

6. Seed the database (optional):
    ```sh
    php artisan db:seed
    ```

7. Serve the application:
    ```sh
    php artisan serve
    ```

### Usage
- Access the dashboard at `http://localhost:8000/dashboard`
- Log in with your credentials to start managing cheques.

## License
This project is a private repository and is not licensed for public use.

## Contact
For any questions or issues, please contact [ag.dipanshu1@gmail.com]