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

* http://localhost:8080/import - Imports CSV into Results Table, only run ONCE!
* http://localhost:8000/ - Shows Header row of CSV
* http://localhost:8000/results - Shows all currently configured query results
* http://localhost:8000/employer-provides-mental-health - Shows results based on "Does your employer provide mental health benefits as part of healthcare coverage?"
* http://localhost:8000/unknown-coverage-suspect-condition - Shows results based on "people in the US, don't know if they have mental health care coverage, but have been or suspect they have a mental health condition"
* http://localhost:8000/self-employed - Shows results based on "Are you self-employed?"
* http://localhost:8000/have-issue-not-sought-treatment - People who have Mental Health Issue That Have Not Sought Treatment"
