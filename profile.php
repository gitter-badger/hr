<?php
echo $_GET["id"];

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'php-mvc');
define('DB_USER', 'root');
define('DB_PASS', '123');



      $PDO = new PDO('dblib:host=' . DB_HOST . ';dbname=' . 
            DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
    define("afnan", "hello");
    
    echo afnan;