<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<h1 align="center">Laravel Starter Project</h1>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About 

TODO

## Features  

TODO

## How to use 

TODO


## template for instalation guide for fianl user / team in the final project.


```
 ███████████                          ███                     █████                                                    
░░███░░░░░███                        ░░░                     ░░███                                                     
 ░███    ░███ ████████   ██████      █████  ██████   ██████  ███████      ████████    ██████   █████████████    ██████ 
 ░██████████ ░░███░░███ ███░░███    ░░███  ███░░███ ███░░███░░░███░      ░░███░░███  ░░░░░███ ░░███░░███░░███  ███░░███
 ░███░░░░░░   ░███ ░░░ ░███ ░███     ░███ ░███████ ░███ ░░░   ░███        ░███ ░███   ███████  ░███ ░███ ░███ ░███████ 
 ░███         ░███     ░███ ░███     ░███ ░███░░░  ░███  ███  ░███ ███    ░███ ░███  ███░░███  ░███ ░███ ░███ ░███░░░  
 █████        █████    ░░██████      ░███ ░░██████ ░░██████   ░░█████     ████ █████░░████████ █████░███ █████░░██████ 
░░░░░        ░░░░░      ░░░░░░       ░███  ░░░░░░   ░░░░░░     ░░░░░     ░░░░ ░░░░░  ░░░░░░░░ ░░░░░ ░░░ ░░░░░  ░░░░░░  
                                 ███ ░███                                                                              
                                ░░██████                                                                               
                                 ░░░░░░                                                                                
```



# **First time** : Installation Guide

This guide provides steps to set up a Laravel application on your local machine for the first time.

## Prerequisites

Before you begin, ensure you have installed `PHP`, `Composer`, `Node.js`, and `NPM` on your machine.

## Steps to Install

1. **Install Composer Dependencies:**

   Laravel uses Composer to manage its dependencies. Run the following command in your terminal to install the required composer dependencies:

    ```bash
    composer install
    ```

2. **Install Node Dependencies:**

   Laravel uses NPM to manage its JavaScript dependencies. Run the following command in your terminal to install the required Node.js dependencies:

    ```bash
    npm install
    ```

3. **Environment File:**

   Laravel utilizes the `.env` file to handle configuration. Create your own `.env` file by copying the example provided:

    ```bash
    cp .env.example .env
    ```

4. **Update .env File:**

   Open the `.env` file and set up your database information:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ```

   Don't forget to also set the `APP_URL` and other necessary configurations as per your application's requirement.

5. **Generate Application Key:**

   Laravel requires an application key for encrypting various data. Generate it using the following command:

    ```bash
    php artisan key:generate
    ```

6. **Run Migrations:**

   Migrations are like version control for your database, allowing your team to modify and share the application's database schema. Migrate your database with the following command:

    ```bash
    php artisan migrate
    ```

7. **Create Symbolic Link:**

   To create a symbolic link from "public/storage" to "storage/app/public", run the following command:

    ```bash
    php artisan storage:link
    ```

8. **Build Assets:**

   To compile and minify your assets, run the following command:

    ```bash
    npm run build
    ```

9. **Clear Cache:**

   Finally, clear your application cache using the following command:

    ```bash
    php artisan optimize:clear
    ```

Now, you should be able to serve your application and see it in action!


# After each update : Update Guide

This guide provides steps to update your Laravel application after pulling new change , agile cycle and push to production in your devlopment piplines .
note that in this steps you can run all the steps even if they dont have a new dependencies.
## Steps to Update

1. **Install New Composer Dependencies:**

   If new Composer dependencies have been added, install them using the following command:

    ```bash
    composer install
    ```

2. **Install New Node Dependencies:**

   If new Node.js dependencies have been added, install them using the following command :

    ```bash
    npm install
    ```

3. **Run Database Migrations:**

   If there are changes in the database schema, apply them by running migrations with the following command:

    ```bash
    php artisan migrate
    ```

4. **Build Assets:**

   To compile and minify any new or updated assets, run the following command:

    ```bash
    npm run build
    ```

5. **Clear Cache:**

   Finally, clear your application cache to ensure the application is using the new updates. Run the following command to clear the cache:

    ```bash
    php artisan optimize:clear
    ```

Remember to check the application for any potential issues after applying these updates!

# for devloper : Rebuild Guide During development

During development This single command sequence builds your assets, updates the translations, clears the cache, and serves the application:

```bash
npm run build && php artisan translator:update && php artisan optimize:clear && php artisan serve 
```



