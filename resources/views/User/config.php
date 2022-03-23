<?php

//DATABASE CONFIG
$DB_CONFIG = [
  'host' => 'localhost',
  'user' => 'root',
  'passwd' => '',
  'db_name' => 'projectspp'
 ];  
 //KONEK KE MYSQL
 $connect = mysqli_connect($DB_CONFIG['host'], $DB_CONFIG['user'], $DB_CONFIG['passwd'], $DB_CONFIG['db_name']);
 
  ?>