<?php
try{
  $db = new PDO('mysql:host=127.0.0.1;dbname=laxmi-lottery','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('<h4 style="color: #e4e4e4">Error connecting to the database. Please check app init file</h4>');
}