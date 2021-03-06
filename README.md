# Dataswitcher tech challenge in Laravel

You should be able to complete these challenges in around 4 hours. There is no specific order you need to execute the tests in.

All of this stuff should work via Laravel Sail CLI, read more about that here:

https://laravel.com/docs/8.x/sail

No need to make any view (html) solutions for this.

You can use PHP 8.0 as it comes with the default stack.

You can build everything directly into the controller methods. No need to use complex patterns and such. 

## Getting started

1. Install Docker on your machine
2. Clone this repository
3. Go to the directory of the project (cd tech-challenge-laravel)
4. Execute the command ./vendor/bin/sail up
5. Install the composer dependencies ./vendor/bin/sail composer install

### Challenge 1

    ./vendor/bin/sail artisan techchallenge:one

Convert the ./data/persons.csv file into the MongoDB collection that is in Person.php. You can use the models directly like Laravel intented (for instance Person::create())

With the following requirements:

1. The resulting MongoDB collection should have exactly 500 rows
2. The full name should be split over three columns (firstname, suffix and lastname)
3. The country names should be stored as ISO 3166 codes (ie, AF, NL, etc) 

Check if all the data has been loaded properly by using some tool like MongoDB compass.

You will be awarded points based on the creativeness of your solution.

### Challenge 2

    ./vendor/bin/sail artisan techchallenge:two

Unzip ./data/huge.zip and read this into the collection Huge.php
Your points will be awarded by the maximum memory usage of the script. 
If you load the full CSV in memory this will yield the least point as this is not a great solution.

### Challenge 3 

    ./vendor/bin/sail artisan techchallenge:three

Generate 5000 random addresses via this URL:

https://random-data-api.com/api/address/random_address

And put them in Address.php model.
You will be awarded points based on the time it takes to run the script with 5000 random addresses.

### Challenge 4

    ./vendor/bin/sail artisan techchallenge:four

Generate a PDF document with random data on it (Lorem ipsum). The PDF should have a background image that is mentioned in ./data/background-pdf.jpg
You will be awarded points based on the portability of the solution.

### Challenge 5 - bonus challenge

    ./vendor/bin/sail artisan techchallenge:five

Generate an Exact Online Transaction XML that can be imported via Import/Export > XML > Transactions. For the following transaction:

* Type of entry: Sales
* Customer: Dataswitcher (code is 2)
* YourRef INV0001
* A single line with: 
  * G/L account 700000
  * Description: Sales to Dataswitcher
  * No VAT
  * Amount of 100.00 EUR
  
*Login details:* 
https://start.exactonline.be/
and username ExactTestUser

Password + 2FA code on request.
