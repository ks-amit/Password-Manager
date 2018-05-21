# Password Manager

A simple classic password managing tool. Functionalities included:

* Account Creation - Register / Login / Activate / Forgot / Reset 
* Store and retrieve your passwords
* Add / Remove your passwords
* Account Settings - Change account password / Delete Account

# KEY POINTS

* Back-End Technologies: PHP + MySQL
* Front-End Technologies: HTML, CSS, JQuery
* Authentication provided - SESSIONS used, logs out everytime you close your browser
* Password Hashing Algorithm - BCRYPT
* Mailing Service provided using PHP Mailer

# SCREENSHOTS

![scr1](https://github.com/dumbape/Password-Manager/blob/master/activated.png?raw=true)
![scr2](https://github.com/dumbape/Password-Manager/blob/master/Login.png?raw=true)
![scr3](https://github.com/dumbape/Password-Manager/blob/master/dashboard.png?raw=true)
![scr4](https://github.com/dumbape/Password-Manager/blob/master/settings.png?raw=true)

# INSTALL

* git clone https://github.com/dumbape/Password-Manager.git

* `cd Password-Manager`

* Make sure to have PHP and composer installed in your system. 

* Run `composer install`

* Make sure to have all requirements available in 'vendor' folder after using composer

* Import the file `database.sql` provided in your mySQL.

* The controller folder has all the controllers which contains almost all PHP coding that has been done.

* `db_controller.php` controls the database operations. Specify your database details there.

* Make sure the server details are mentioned in the file `mail_controller.php`
