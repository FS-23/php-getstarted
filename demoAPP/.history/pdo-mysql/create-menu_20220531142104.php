<?php
   $servername = "localhost";
   $db = "Restaurant";
   $username = "root";
   $password = "";

   try{

      $con = new PDO("mysql:host=$servername;dbname=$db;charset=utf8" , $username , $password);
      echo "Connected successfully !!!\n";

      $title = $_POST['title'];
      $ingredient = $_POST['ingredient'];
      $price = $_POST['price'];


      echo "Title: $title - price: $price - ingredient: $ingredient";

   }catch(Exception $ex){

       echo "Erreur de connexion:".$ex->getMessage();

   }
