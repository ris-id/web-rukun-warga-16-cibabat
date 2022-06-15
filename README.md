# Panduan Instalasi

## Step 1 : Install package via composer
composer install

## Step 2 : File .env
copy file .env.example -> .env -> setup nama db

## Step 3 : Generate Key
php artisan key:generate

## Step 4 : Migrate database
php artisan migrate:fresh

## Step 5 : Run App
php artisan serve
