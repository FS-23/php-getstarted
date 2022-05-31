<?php
   $servername = "localhost";
   $db = "Restaurant";
   $username = "root";
   $password = "";

   $menus = [];
   try{
      $con = new PDO("mysql:host=$servername;dbname=$db;charset=utf8" , $username , $password);
      echo "Connected successfully !!!\n";
      
      $statement = $con -> query("select * from menus");

      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

      print_r($rows);


   }catch(Exception $ex){

   }