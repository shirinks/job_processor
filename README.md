How to set up and run your project:

1. Clone the project from github
2. Setup Database connection in .env
3. Setup email credentials in .env
4. change QUEUE_CONNECTION to database in .env
5. Run command - php artisan queue:table
5. Run command - php artisan migrate
4. Run the command 
        php artisan queue:work
4. Run the command 
        php artisan place-order email orderamount
    eg: php artisan place-order user@example.com 100