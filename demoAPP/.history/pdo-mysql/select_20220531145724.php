<?php
  $server = "localhost";
  $db = "Restaurant";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       echo "Connected succesfully";
      
       echo "Created succefully";
  }catch(Exception $ex){
      echo "\nConnexion error:". $ex->getMessage();
  }