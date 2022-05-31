<?php
  $server = "localhost";
  $db = "fs23ecom";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
       echo "Connected succesfully";
       $stmt = $conn -> prepare('insert into product values(:label,:description,:price)');
       $label = "Nike force 452";
       $price = 78;
       $stmt -> bindParam(':label',$label);
       $stmt -> bindParam(':description',$label,  PDO::PARAM_STR);
       $stmt -> bindParam(':price', $price,  PDO::PARAM_STR);
       $res = $stmt->execute();
       echo "Created succefully";
  }catch(Exception $ex){
      echo "Connexion error:". $ex->getMessage();
  }