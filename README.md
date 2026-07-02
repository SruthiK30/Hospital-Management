# Hospital Management System

A PHP-based hospital management web app with user authentication and appointment booking.

## Features
- User registration & login (with security question for account recovery)
- Department listing
- Doctor listing
- Appointment booking
- Session-based login/logout

## Tech Stack
- PHP
- HTML/CSS
- MySQL

## Setup
1. Clone this repo
2. Import `database.sql` into MySQL (via phpMyAdmin or CLI) 
3. Update database credentials in `connect.php` with your own local MySQL username/password
4. Run on a local server (e.g. XAMPP/WAMP) — place the project folder inside `htdocs`
5. Visit `login.html` or `register.html` in your browser to get started

## Project Structure
- `login.html` / `login.php` — user login
- `register.html` / `register.php` — new user registration
- `security.php` — security question flow (password recovery)
- `dept.php` — department listing
- `doctor.php` — doctor listing
- `booking.html` / `booking.php` — appointment booking
- `home.php` — dashboard after login
- `logout.php` — session termination
- `connect.php` — database connection config

## Status
This was built as a learning project to practice PHP + MySQL + basic authentication flows.
