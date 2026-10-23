# HealthCare Medical Shop — Glassmorphism starter

Responsive PHP/MySQL storefront inspired by the provided screenshot. The interface uses translucent glass panels, teal highlights, product-box mockups, categories, search/filtering, a demo cart, prescription upload UI and newsletter subscription.

## Requirements
- PHP 8.1+ with `pdo_mysql` and `fileinfo` enabled
- MySQL 8+ / MariaDB
- Apache/Nginx or PHP's local development server

## Setup (XAMPP / local PHP)
1. Extract `healthcare_glass_shop.zip` into your web root (for XAMPP, `htdocs/healthcare_glass_shop`).
2. Import `database/schema.sql` using phpMyAdmin or MySQL CLI.
3. Edit `includes/db.php` credentials if your MySQL username/password differ.
4. Open `http://localhost/healthcare_glass_shop/`.
5. If using PHP's dev server, run from this folder: `php -S 127.0.0.1:8000`, then open `http://127.0.0.1:8000`.

## Included
- `index.php` — storefront, categories, product grid, glassmorphism packaging mockups
- `assets/css/style.css` — responsive glass UI
- `assets/js/app.js` — search, category filter, add-to-cart interactions
- `includes/db.php` — PDO database connection
- `database/schema.sql` — schema and sample products
- `api/newsletter.php` — prepared-statement newsletter signup
- `api/upload_prescription.php` — 5 MB JPG/PNG/PDF upload validation

## Important before launch
This is a starter storefront, not a production pharmacy system. The cart is browser-only and checkout is intentionally a demo; do not accept payment until a secure server-side order flow and trusted payment gateway are integrated. Add login/roles, admin product management, server-side stock/price validation, order records, CSRF protection, rate limiting, backups, HTTPS and privacy controls. Prescription files contain sensitive information: keep them outside the public web root, restrict staff access, define retention/deletion policies and require pharmacist verification. Only sell/dispense medicines in accordance with applicable Indian laws and licensing requirements. Product names and prices are demonstration content; verify all products and prescription requirements before publishing.
