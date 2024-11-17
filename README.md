# PHP Concierge project

>[!IMPORTANT]
>To learn how to install and also to know how we did this project, it's very important that you read every part of this readme. Thank you for your patience and have a good read.
***

## What is this project about?

The objective of this project is to create a system that manages and control reports in a hotel.

For this to happen we created a CRUD using PHP, HTML, SQL and CSS.

We also have to make the page responsive using flex.

***

## Overview:

Take a look at how our project turned out.
***

## <p align="center">Report page:</p>

![Screenshot 2024-11-17 193056](https://github.com/user-attachments/assets/6c39e480-6f31-4f55-bb0f-677d9f125df0)
***

## <p align="center">Report an issue page:</p>

![Screenshot 2024-11-17 193116](https://github.com/user-attachments/assets/59a6adff-eb11-4534-a261-0a6ae4a68b6c)
***


## Installation

>[!CAUTION]
>You'll need to have Xampp or another server that supports PHP and MYSQL. So before you start to read how to install it, search for a local server that supports PHP and MYSQL.

* Clone this repository:
```bash
https://github.com/AntonioGuillen123/Proyecto-Conserjeria.git
```
* Put the project folder in the xampp folder called "htdocs".

* Install Composer
```bash
https://getcomposer.org/
```

* To check if it was installed correctly, in the terminal enter:
```bash
composer --version
```

* If it returns a version, everything is correct.

  
* In the VSC terminal enter:
```bash
composer install
```

* After that it should appear a folder named "vendor".

* Now you have to create a file named ".gitignore". 

* In the .gitignore file put "vendor/" (this will make the terminal ignore the vendor folder when you do a git push.).

* Now open phpMyAdmin

* Create a database named "Proyecto-Conserjeria"

* Now you should find a file named "Proyecto-Conserjeria.sql", when you find the folder, import the database.

*  Now open Xampp (or the server you installed), now start the Apache and the MySQL.

*  You're good to go, just access the incidents management system in your browse.
***

# Tests
Se pueden hacer 5 tests, 1 para comprobar si todos están bien, 2 para comprobar los getters y otros 2 para los setters (Del room y del issue nada más).
Se utiliza este comando para ejecutarlos(se tiene que estar en la raiz del proyecto para que funcione):
```bash
./vendor/bin/phpunit tests
```
***
![imagen_2024-11-17_165345281](https://github.com/user-attachments/assets/10966e68-be7a-4fe0-be23-c343f5a6d2ec)
