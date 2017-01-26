Fakultet - Laravel projekt
=========================

Ovaj repozitorij sadrži bazni projekt za tečaj "Programer internet aplikacija – PHP i MySQL"


Zahtjevi
============

-XAMPP (https://www.apachefriends.org/index.html)

-Netbeans (https://netbeans.org/)

-HeidiSQL (http://www.heidisql.com/)

-Git (https://git-scm.com/downloads)

-Composer (https://getcomposer.org/)




Pokretanje projekta
=================================
```
mkdir ~/Code
cd ~/Code
git clone https://github.com/mrvic/fakultet.git fakultet
cd ~/Code/fakultet
composer update --no-scripts
php artisan cache:clear
composer dump-autoload
edit .env
[start-mysql-server]
php artisan migrate --seed
```


Postavke
============
Postavke za Netbeans, HeidiSQL, XAMPP, PHPStorm i GIT će biti objavljene ovdje: https://github.com/mrvic/fakultet/issues
