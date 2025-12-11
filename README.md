## Food Delivery – Laravel 9

A Laravel 9 app for managing a simple food delivery workflow. It includes CRUD flows for core entities plus file upload and email sending utilities.

### Core Features
- Customers: create, read, update, delete (`customer/*`).
- Restaurants: create, read, update, delete (`resturant/*`).
- Food items: create, read, update, delete (`food/*`).
- Orders: create, read, update, delete (`order/*`) with links to customers and food.
- Cities: create/read to support location selection.
- Delivery personnel: create/read with city assignment; foreign key to cities.
- File upload/download: upload, view, and download stored files.
- Mail form: simple form to send an email via `mail_form` / `send_mail`.
- Auth scaffolding: Laravel Breeze/Jetstream-style auth routes (`/login`, `/register`) are enabled via `Auth::routes()`.

### Tech Stack
- PHP 8.2, Laravel 9.52
- MySQL (uses migrations for schema)
- Blade views, Eloquent ORM

### Getting Started
1) Install dependencies: `composer install` (and `npm install && npm run build` if you need assets).  
2) Copy `.env.example` to `.env` and set DB credentials.  
3) Generate app key: `php artisan key:generate`.  
4) Run migrations (fresh DB): `php artisan migrate:fresh`.  
5) Serve the app: `php artisan serve` (default http://127.0.0.1:8000).

### Database Schema (migrations)
- Users, password resets, personal access tokens
- Restaurants, cities, customers, orders (with FK to customers & food), delivery_personnels (FK to cities), food, filings (uploads)

### Notable Routes
- Public home: `/`
- CRUD: `customer/*`, `resturant/*`, `food/*`, `order/*`
- Delivery personnel: `DeliveryPersonnel/create`, `DeliveryPersonnel/read`
- Files: `/file_upload`, `/file_store`, `/show_data`, `/view_file/{id}`, `/download_file/{file}`
- Mail: `/mail_form`, `/send_mail`
- Auth: `/login`, `/register`, `/home`

### Development Tips
- If routes/config get cached and paths change, run `php artisan route:clear` and `php artisan config:clear`.
- Session/storage issues: ensure `storage/framework/sessions` exists and web server has write access.
