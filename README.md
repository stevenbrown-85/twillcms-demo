## About

Simple Twillcms demo with page module, menu and some simple blocks

## Setup

Clone this repo

Set up local database

copy .env.example - save as .env

Update DB connection detail in the env file

make sure QUEUE_CONNECTION=sync - this is for the nested menu

composer install

php artisan migrate

php artisan twill:install

php artisan key:generate

php artisan storage:link

node v22.12.0

npm install

php artisan serve

npm run dev

To access the cms go to /e1-cms