<?php 
 $conn =  mysqli_connect(
     'db',
     'root',
     'Secreto2021',
     'php_mysql_crud'
 );

 if (isset($conn)) {
     echo 'DB is conneted';
 }
?>