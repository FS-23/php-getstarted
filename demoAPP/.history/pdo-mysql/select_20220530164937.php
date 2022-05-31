<?php
  $server = "localhost";
  $db = "fs23ecom";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       echo "Connected succesfully";
       $stmt = $conn -> prepare("insert into product values(:label,:description,:price)");
       $label = "Nike force 452"
       $stmt -> bindParam('label',$label );
       $stmt -> bindParam('description', "Nike force 452 desc");
       $stmt -> bindParam('price', 78);
       $res = $stmt->exec();
       echo "Created succefully";
  }catch(Exception $ex){
      echo "Connexion error:". $ex->getMessage();
  }