<?php
   $servername = "localhost";
   $db = "Restaurant";
   $username = "root";
   $password = "";

   try{

      $con = new PDO("mysql:host=$servername;dbname=$db;charset=utf8" , $username , $password);
      echo "Connected successfully !!!";

      $title = $_POST['title'];
      $title = $_POST['ingredient'];
      $title = $_POST['price'];

   }catch(Exception $ex){

       echo "Erreur de connexion:".$ex->getMessage();

   }
