# Finkoach Academy

## Overview

Finkoach Academy is a web application for managing a group of users and admins. It allows admins to create, read, update, and delete (CRUD) users as well as change their admin status.

## Usage

1. Start by installing the required dependencies: `$ composer install`.
2. Connect to a MySQL database by setting the appropriate parameters in `config/constants.php`.
3. Use the registration page (`register.html`) for new users to register.
4. Use the login page (`login.html`) to log in as an existing user.
5. Once logged in, users have access to their dashboard (`dashboard.php`).
6. Admins have additional functionality:
   1. View and manage all users (`manage-users.php`).
   2. View and manage all admins (`manage-admins.php`).
   3. Promote a user to admin status (`add-admin.php`).
   4. Demote an admin to user status (`remove-admin.php`).
   5. Delete a user (`delete-user.php`).
7. Log out using the logout button on the dashboard or in the navigation bar.

## File Structure

- `config/`: contains database connection settings (`constants.php`).
- `css/`: contains stylesheets for the application.
- `Images/`: contains images used in the application.
- `js/`: contains JavaScript files for the application.
- `register.html`: registration page for new users.
- `login.html`: login page for existing users.
- `profile.php`: dashboard for logged in users.
- `manage-users.php`: view and manage all users (admins only).
- `manage-admins.php`: view and manage all admins (admins only).
- `add-admin.php`: promote a user to admin status (admins only).
- `remove-admin.php`: demote an admin to user status (admins only).
- `delete-user.php`: delete a user (admins only).
- `header.php`: header content included on all pages.
- `footer.php`: footer content included on all pages.

## Dependencies

- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [Composer](https://getcomposer.org/) (for PHP dependencies)

## PHP Dependencies

- [mysqli](https://www.php.net/manual/en/book.mysqli.php) (MySQL improved extension)
- [password_compat](https://github.com/ircmaxell/password_compat) (compatibility library for PHP 5.5+ password functions)

## Author

- Polycarp Michael

## Contact

- Email: polycarpmikel80@gmail.com

## Follow Me on

- GitHub: [@MichaelX-3553](https://www.github.com/MichaelX-3553)
- Instagram: [@michael_polycarp](https://www.instagram.com/michael_polycarp/)
- Twitter: [@MichaelX_P](https://www.twitter.com/MichaelX_P)
