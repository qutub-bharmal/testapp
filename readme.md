After successfuly clone, please go through below instructions:

## Install PHP Composer#
```
composer install
```

## Database and Seed #

- Add  Database in mysql with convinent name

- Updae the .env file by providing mysql details
    -Database Name
    -User Name
    -Password

- Once .env file is set , database can be migrated
```
 php artisan migrate --seed
 ```


### Run the application #
```
php artisan serve
```

If you see any error for the key, please generate key by below command:
```
php artisan key:generate
```

You can see solution at ```\test``` route