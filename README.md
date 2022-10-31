## What is this?

Just a empty Laravel proyect, with JWT installed and configured.

Clone, make a .env file, and then:
* `composer install`
* `php artisan keys:generate`
* `php artisan migrate`
* `php artisan serve`
* `php artisan jwt:secret`


To create an User for testing, if you still don't know how to do it run this crap on Tinker (`php artisan tinker`):

`User::create(["name"=> "larainfo","email"=>"larainfo@gmail.com","password"=>bcrypt("123456")]);`