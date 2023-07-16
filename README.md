<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<h1 align="center">Laravel Starter Project</h1>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About

Kickstart your Laravel development with this fully-equipped project repository. With Laravel Debugbar, Livewire, an automatic translator, and Vite all pre-installed and configured, you can get straight to building your application without worrying about the initial setup.
## Features  

**Packages**
- [**Livewire**](https://github.com/livewire/livewire) : Laravel Livewire is a full-stack framework for Laravel that allows you to write dynamic, interactive web applications entirely in PHP, without requiring you to write JavaScript.
- [**laravel-translator**](https://github.com/thiagocordeiro/laravel-translator) : Laravel Translator is a package that assists in the management and automation of language translations in a Laravel application, supporting both static and dynamic translations.
- [**laravel-debugbar**](https://github.com/barryvdh/laravel-debugbar) : Laravel Debugbar is a package that provides a developer-friendly debug bar in your application, showing detailed debug information about queries, routes, views, and more to assist during the development process.
- [**laravel/ui**](https://github.com/laravel/ui) : Laravel UI is a package that provides a simple way to scaffold basic Laravel frontend scaffolding, including simple Bootstrap and Vue.js setups, to help quickly start building your application's user interface.
- [**bootstrap**](https://github.com/twbs/bootstrap) : Bootstrap is a popular open-source framework for building responsive, mobile-first websites and applications. It includes a comprehensive collection of HTML, CSS, and JavaScript components that makes web development faster and easier.
- [**Vite**](https://github.com/vitejs/vite) : Vite is a next-generation frontend build tool created by Evan You, the creator of Vue.js. The integration of Vite with Laravel can dramatically improve the developer experience by providing fast server start-up, instant hot-module replacement (HMR), and true on-demand compilation.
- [**purgecss**](https://github.com/erbelion/vite-plugin-laravel-purgecss) : PurgeCSS is a tool often used in web development to remove unused CSS. It analyzes your content and your CSS files, and then matches the selectors used in your files with the ones in your content files. Any CSS selectors that it cannot match to content will be removed. This results in a smaller CSS file size, which can improve load times and performance for your website.

**Packages setup features**
- **auto translation update** : The Laravel Translator, set up for Arabic and English, automatically updates translations found in @lang() in views when you run php artisan translator:update during development rebuilds.
- **auto Front-end (Compilation,Optimization,Bundling,Versioning)** : with Vite in a Laravel project automates front-end asset management. When you run npm run build, it compiles, optimizes, and bundles your JavaScript and CSS files, resulting in faster load times. It also versions assets, ensuring the browser always loads the latest updates.
- **auto css cleanup** : When you execute the npm run build command, PurgeCSS operates in the background, automating the process. optimized CSS file that only includes the styles that are used in `resources/views` , ultimately leading to faster load times and a more efficient application , and better development process.

**Design pattern and scructure**
- **CSS structure** : The CSS structure for this project has been carefully designed for a streamlined development experience. All CSS files are located under resources/sass, which is divided into several subdirectories: 
```
resources/sass
├── custom
│   ├── _custom1.scss
│   ├── _custom2.scss
│   └── custom.scss (imports custom1.scss and custom2.scss)
├── fonts
│   ├── _font1.scss
│   ├── _font2.scss
│   └── fonts.scss (imports font1.scss and font2.scss)
├── icons
│   ├── _icon1.scss
│   ├── _icon2.scss
│   └── icons.scss (imports icon1.scss and icon2.scss)
├── libraries
│   ├── _library1.scss
│   ├── _library2.scss
│   └── libraries.scss (imports library1.scss and library2.scss)
├── rtl
│   ├── _rtl1.scss
│   ├── _rtl2.scss
│   └── rtl.scss (imports rtl1.scss and rtl2.scss)
└── app.scss (imports custom.scss, fonts.scss, icons.scss, libraries.scss, rtl.scss)
```

- **Views structure** : The systematically crafted directory structure for our Laravel views promotes modular design, enhancing code readability and maintainability. It aligns with a thought process focused on separation of concerns, reusable components, and intuitive navigation, leading to more efficient and effective development workflows.
```
# Directory structure of resources/views
resources/views
├── admin
│   └── ... (views that are accessible only by administrators)
├── auth (views related to authentication, such as login, register, and password reset pages.)
│   ├── login.blade.php
│   ├── register.blade.php
│   └── ...
├── components (reusable view components)
│   └── ...
├── errors
│   ├── 404.blade.php
│   ├── 500.blade.php
│   └── ...
└── layouts
    ├── master.blade.php (The basic template with all features.)
    ├── master-auth.blade.php (A specialized template for authentication pages, which may lack certain elements, such as the navigation bar.)
    ├── master-page.blade.php (A template for pages with shared layouts, like a common title or border.)
    └── parts
        ├── head.blade.php (Contains the yield('head') directive, where you can inject any extra elements needed in the HTML <head> section, as well as the page title.)
        ├── nav.blade.php
        ├── preloader.blade.php
        ├── footer-scripts.blade.php (Contains the yield('scripts') directive, where you can add any extra JavaScript needed in the footer.)
        └── footer.blade.php 

```

**Harness the Full Power of Laravel**
- **Casts** : to create `php artisan make:cast XXXCastNameXXX` : convert the values between different types when you are fetching from or storing to the database. This facilitates data handling and reduces the need for additional transformation logic.
- **Requests** : to create `php artisan make:request XXXRequestNameXXX` : handle and validate incoming HTTP requests. This promotes secure and reliable data input practices.
- **Models** : to create `php artisan make:model XXXModelNameXXX` : representing the logical structure and relationships of database tables. They enable a smooth, intuitive, and object-oriented way to interact with your database.
- **Migration** : to create `php artisan make:migration XXXtable_nameXXX` : Migrations are a way to create and modify your database tables structure. without touching the database directly.
- **Policies** : to create `php artisan make:policy XXXPolicyNameXXX` : Laravel's 'Policies' are used to organize authorization logic around a particular model or resource. They help in keeping the access control logic decentralized and more manageable.
- **Routes Groups** : samples added to `web.php` : group several routes under a specific set of attributes (like middleware, namespaces, etc.). This makes the routes file more organized and the routing behavior more customizable.

**Ready to use**
- **Auth Scaffolding** : complete authentication system using Bootstrap 5. This includes views for user login, registration, password reset, email confirmation, and user dashboard, all styled using Bootstrap 5.
- **language switcher** : ready to use out of the box , with routes , packageed controlers , UI sample drop down.

## How to Use 

1. Clone the repository.
2. Follow the installation steps detailed in the installation guide.
3. Edit the `.env` file according to your environment and project requirements.
4. **(Optional)** to add more languages is simple. Insert new language code in languages array in `config/translator.php`. and create a file for it in `resources/lang` like `fr.json`.
4. **(Optional)** to add any additional CSS files you will use in the `resources/scss` directory and import them in the `app.scss` file.
5. **(Optional)** to add any additional JS files you will use in the `resources/js` directory and import them in the `app.js` file.
6. Delete the initial part of the 'readme.md' up to this point. You now have a comprehensive installation guide and a project ready for development.

## Template for the Installation Guide

Use the installation guide template for the final project for end-users or your development team. Modify the template according to your project's needs to provide clear and accurate setup instructions.




<h1 align="center">[[project name]]</h1>



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



