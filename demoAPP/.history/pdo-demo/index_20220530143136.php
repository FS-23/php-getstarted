<?php
  $server = "localhost";
  $db = "fs23db";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       $stmt = $conn->query('select * from product');
       echo "Connected succesfully";
  }catch(Exception $ex){
      echo "Connexion error:". $ex->getMessage();
  }