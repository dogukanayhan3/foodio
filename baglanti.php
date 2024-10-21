<?php
   
   define('DB_USER', "?");
   define('DB_PASSWORD', "?");
   define('DB_DATABASE', "?");
   define('DB_SERVER', "?");

$baglanti=mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($baglanti,"UTF8");

?>
