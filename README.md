# PMS

## Tasklist

- [x] Inicializace
- [ ] Vytváření
- [ ] Hotovo

## Basic installation
1. `git clone https://github.com/pilarik31/mypms.git`
2. `composer install`
3. `npm install`
4. `cp .env.example .env`

5. Create your own empty database in Adminer or PHPMyAdmin.

6. Open your .env file and set the constants for DB connection:
    ```
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password
    ```

7. `php artisan migrate`
8. `php artisan db:seed` - if you want to insert some random data into database
9. `php artisan key:generate`
10. `Create virtual host on your webserver from tutorial down there`
11. `npm run watch`

## How to create VirtualHost
Because it is better to have it on domain with default port and debug CSS and use with npm and Browsersync
1. open hosts file and add
`127.0.0.1 pms.local`
2. Add VirtualHost to your webserver C:\wamp64\bin\apache\apache2.4.35\conf\extra\httpd-vhosts.conf pointing to projects public folder
`<VirtualHost *:80>
	ServerName pms.local
	DocumentRoot "c:/wamp64/www/mypms/public"
	<Directory  "c:/wamp64/www/mypms/public/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>`




## Database migrations
Do not ever try to create tables or edit tables structure via Adminer or PHPMyAdmin.
Instead create migration files. For example:

`php artisan make:migration create_clients_table`

`php artisan make:migration add_email_to_clients_table --table=clients`

https://laravel.com/docs/5.8/migrations


## Models
`php artisan make:model Client`


## Creating controller template
`php artisan make:controller ClientsController --resource --model=Client`

## Seeders
`php artisan make:seeder NAME`

## Forms
```
php artisan make:form Form/ClientForm
--fields="firstname:text, lastname=:text, email:email, phone:tel, bank_account:text, dni:number, vat:text, company:text"
```


# Unit testing

Create a test in the Feature directory...

`php artisan make:test UserTest`

Create a test in the Unit directory...

`php artisan make:test UserTest --unit`

Running all tests (in order for code coverage to work, you need to have xdebug installed)

`./vendor/bin/phpunit`

[Docu link](https://laravel.com/docs/5.8/testing)
