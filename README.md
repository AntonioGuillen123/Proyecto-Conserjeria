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

* Now you should find a file named "Proyecto-Conserjeria.sql", when you find the file, import the database.

*  Now open Xampp (or the server you installed), now start the Apache and the MySQL.

*  You're good to go, just access the incidents management system in your browse.
***

# Tests

* You can do 5 tests, 1 to check if all of them are correct, 2 to check the getters and another 2 for the setters (Only the room and the issue).
* The command right below is used to execute them (you have to be at the root of the project for it to work):

```bash
./vendor/bin/phpunit tests
```
***
The tests were successful.

![imagen_2024-11-17_165345281](https://github.com/user-attachments/assets/10966e68-be7a-4fe0-be23-c343f5a6d2ec)
***

## Tools we used in this project

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='tailwind css' src='https://img.shields.io/badge/tailwind-100000?style=for-the-badge&logo=tailwind css&logoColor=white&labelColor=00EEFF&color=00EEFF'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
***

## Our team

* Talena Barbosa: https://github.com/talenaa
* Antonio Guillén: https://github.com/AntonioGuillen123
* Jaz: https://github.com/Jaz356
* Matías Stadler: https://github.com/Matias-Stadler

## Thanks for reading!

Thanks for reading this readme!

Have a good day! :3
***
