# Employee Management System

A web-based Employee Management System built with PHP 8.2, Symfony 7.3, and MySQL.

## Features

### Employee Management

-   **Create** new employees with complete information
-   **Read** all employees with search functionality
-   **Update** employee details
-   **Delete** employees with confirmation

### Department Management

-   **Create** new departments
-   **Read** all departments with employee counts
-   **Update** department information
-   **Delete** departments (only if no employees assigned)

### User Interface

-   Clean, responsive (tested for 365px width and above) Bootstrap-based design
-   Intuitive navigation

### Data Validation

-   Required field validation
-   Email format validation
-   Email uniqueness enforcement
-   Phone number format validation
-   Hire date validation (cannot be in future)
-   Department assignment requirement

## Installation

### Prerequisites

-   PHP 8.2 or higher
-   MySQL 8.0 or higher
-   Composer
-   Apache web server (tested on it, others may work too)

### Setup Instructions

1. **Clone the project files** to your web server directory

2. **Install dependencies**:

    ```bash
    composer install
    ```

3. **Configure database**:

    - Update the `DATABASE_URL` in `.env` file:
        ```
        DATABASE_URL="mysql://root:@127.0.0.1:3306/employee_management?serverVersion=8.0&charset=utf8mb4"
        ```

4. **Create database and run migrations**:

    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5. **Start the development server**:
    ```bash
    symfony server:start
    ```
    Or configure your web server to point to the `public/` directory. Ensure XAMPP is running an Apache and MySQL server

### Made decisions and assumptions

1. **Responsive design**:

    The app looked like as if it should be done as desktop first, mobile second. Did my best so that it would be fully responsive for 365px and wider screens

2. **Look and feel**:

    Clean design, nothing flashy. Decided to use Manrope as the font, since it (alongside Poppins) currently looks like the golden standart.
