# funtimes
Symfony Contact Form

Installation

Requirements
composer

1. Clone this repo and cd into it
2. Run composer install
3. Add database_name parameter
4. Add google_app_key parameter
4. To create db run - php bin/console doctrine:database:create
5. To add db tables run - php bin/console doctrine:schema:update --force
6. Start server - php bin/console server:run
7. Browse to http://127.0.0.1:8000/contact/ 
