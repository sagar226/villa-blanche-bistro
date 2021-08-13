<?php  
  
define (DB_USER, "root");  
define (DB_PASSWORD, "password");  
define (DB_DATABASE, "blanche_bistro");  
define (DB_HOST, "localhost");  
  
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);  

?>  