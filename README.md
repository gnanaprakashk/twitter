
# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Please make sure PHP version 8.0 or above and composer is installed in your system 

Clone the repository

    git clone git@github.com:gnanaprakashk/twitter.git

Switch to the repo folder

    cd twitter-clone

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Install the frontend and node modules

    php artisan ui bootstrap --auth

    npm install && npm run dev
    

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

The default credentials to login is test@demo.com/demo123