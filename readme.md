# OSMI Results App

Based on Laravel 5.2


## Local Installation

* Clone this repo
* Copy `.env.example` to `.env`
* Run `composer install`
* Run `php vendor/bin/homestead make`
* Run `vagrant up`
* Run `vagrant ssh`
* Run `cd osmi && php artisan migrate` (In Vagrant)
* Visit `http://localhost:8080/import` to import the CSV into the Database


Currently Supported Routes

* http://localhost:8000/questions - Shows Header row of CSV
* http://localhost:8000/results - Shows all currently configured query results
