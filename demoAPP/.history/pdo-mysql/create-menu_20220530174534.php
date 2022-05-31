<?php
   $servername = "localhost";
   $db = "Restaurant";
   $username = "root";
   $password = "";

   try{

      $con = new PDO("mysql:host=$servername;dbname=$db;charset=utf8" , $username , $password);
      
   }catch(Excetion $ex){
       echo "Erreur de connexion:".$ex
   }
