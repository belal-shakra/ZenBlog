# ZenBlog



**Created By :** Belal Shakra
**Email :**


## Overview

ZenBlog is a lightweight and clean Bootstrap blog template. It's an elegant, modern, clean, and trendy blog-magazine template suitable for personal blogs, magazine websites, newspapers, or any specific category like fashion, travel, tour agencies, beauty, health, lifestyle, or any magazine sites.

ZenBlog is fully responsive, works perfectly on all devices and screen sizes, and it comes with every possible option and section as you need for a blog/magazine website that requires a sleek, modern, and clean look.

ZenBlog is built with Bootstrap version 5 and doesn't require jQuery.

**Some of the key features include:**

* Lightweight and clean design
* Latest Bootstrap 5 version
* Fully responsive
* variables.css file for easy colors and fonts customizations
* No jQuery dependency
* Sass/SCSS source files included (pro and membership users only)
* Animation on scroll
* Clean code and easy to customize
* Google fonts
* Off-canvas mobile menu
* SEO optimized
* Optimized for performance


## Installation

To get started, clone this repository.

```
git clone git@github.com:belal-shakra/ZenBlog.git
```

Next, copy `.env.example` into `.env`, then configure your Database connection in `.env` file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWROD
```

## Run Packages and helpers

You have to all used packages and load helpers as below.

```
composer install
npm install
npm run build
```

## Generate new application key

You have to generate new application key as below.

```
php artisan key:generate
```

## Run Migrations

You have to run all the migration files included with the project and also run seeders as below.

```
php artisan migrate
```
