# Twill CMS Demo

## About
A simple Twill CMS demo project featuring:
- Page module
- Nested menu
- Basic content blocks

---

## Setup Instructions

### 1. Clone the repository
git clone [git@github.com:stevenbrown-85/twillcms-demo.git](https://github.com/stevenbrown-85/twillcms-demo.git)
cd twillcms-demo

### 2. Create a local database
Create a new database for the project in your local environment.

### 3. Environment configuration
Copy the example environment file:
cp .env.example .env

Update your database connection details inside the `.env` file.

IMPORTANT:
Set the queue connection to sync (required for nested menu support):
QUEUE_CONNECTION=sync

---

### 4. Install backend dependencies
composer install

Run migrations:
php artisan migrate

Install Twill:
php artisan twill:install

Generate application key:
php artisan key:generate

Link storage:
php artisan storage:link

---

### 5. Install frontend dependencies
Make sure you're using:
Node v22.12.0

Then run:
npm install

---

### 6. Run the project
Start the Laravel server:
php artisan serve

In a separate terminal, run:
npm run dev

---

## Accessing the CMS

Once running, access the CMS at:

/e1-cms