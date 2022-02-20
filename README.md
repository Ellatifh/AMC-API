# AMC - API

### routes
  * AMC
  * AGENCES
  * CONTRATS
  * PRODUIT ANNEXES
  * TIERS
  
## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes
### Prerequisites
* PHP > 7
* Composer
* Laravel Version 9
* [Postman](https://www.getpostman.com/) to use the api
### Installing
start by :
```
create a file called .env or copy and paste env.example and rename it .env
```
install the **composer packages**
```
 Composer update
```
generate your laravel Key
```
php artisan key:generate
```
then
```
edit the .env file by seting the database configuration ,I use mysql
```
Run the database migration
```
php artisan migrate
```
### Running the app
To run the app use the following command :
```
php artisan serve
```
### Routing
Create new user **[POST]**
```
/api/auth/register
```
Login and generate a token **[POST]**
```
/api/auth/login
```
The token received from logi/register api should be used in headers as an Autorization (bearer token)
The following route **User** should be **Authenticated**
Show all AMC data : **[GET]**
```
/api/amc
```
Show AMC data by ID : **[GET]**
```
/api/amc/{id}
```
Show all AGENCES data : **[GET]**
```
/api/agences
```
Show AGENCES data by ID : **[GET]**
```
/api/agences/{id}
```
Show all CONTRATS data : **[GET]**
```
/api/contrats
```
Show CONTRATS data by ID : **[GET]**
```
/api/contrats/{id}
```
Show all PRODUIT ANNEXES data : **[GET]**
```
/api/produit_annexes
```
Show PRODUIT ANNEXES data by ID : **[GET]**
```
/api/produit_annexes/{id}
```
Show all TIERS data : **[GET]**
```
/api/tiers
```
Show TIERS data by ID : **[GET]**
```
/api/tiers/{id}
```
