<?php
  define('db_server','localhost');
  define('db_username','root');
  define('db_password','');
  define('db_name','phpwebapp');
  $error_msg = "";
  $db = mysqli_connect(db_server,db_username,db_password,db_name);
?>