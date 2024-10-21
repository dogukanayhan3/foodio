<?php
   
   define('DB_USER', "dogukan");
   define('DB_PASSWORD', "");
   define('DB_DATABASE', "foodio");
   define('DB_SERVER', "localhost");

$baglanti=mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($baglanti,"UTF8");

?>