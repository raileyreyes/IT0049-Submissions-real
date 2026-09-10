# Reyes POS

Reyes POS is a four-page CodeIgniter 4 application created for IT0049 Web System Technologies. This first milestone demonstrates routing, controllers, views, reusable layouts, and static PHP arrays before database integration.

## Required pages

- `/` - landing page
- `/about` - project information
- `/customers` - five sample customer accounts
- `/users` - five sample user accounts

## Requirements

- PHP 8.1 or newer
- PHP `intl` and `mbstring` extensions
- Composer

## Local setup

1. Place the project inside your local web development directory.
2. Open a terminal in the project folder.
3. Install dependencies:

   ```bash
   composer install
   ```

4. Copy `env` to `.env` if `.env` is not already present.
5. In `.env`, use the following local settings:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   app.indexPage = ''
   ```

6. Start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

7. Visit `http://localhost:8080/`.

## Project structure

- `app/Config/Routes.php` defines the four routes.
- `app/Controllers/Pages.php` handles the landing and about pages.
- `app/Controllers/Customers.php` provides the temporary customer array.
- `app/Controllers/Users.php` provides the temporary user array.
- `app/Views` contains the shared layout and four page views.
- `public/assets/css/style.css` contains the responsive presentation styles.

## Data source

The Customer Accounts and User Accounts pages currently use static PHP arrays. A database will replace these temporary records in a later POS milestone.
