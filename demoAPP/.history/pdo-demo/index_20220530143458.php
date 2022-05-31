<?php
  $server = "localhost";
  $db = "fs23db";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       echo "Connected succesfully";
       $stmt = $conn->query('select * from product');
       $rows = $stmt -> fetchAll(PDO::FETCH_ASSOC);
       print_r($stmt);
  }catch(Exception $ex){
      echo "Connexion error:". $ex->getMessage();
  }