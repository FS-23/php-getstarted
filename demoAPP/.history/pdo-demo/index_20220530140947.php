<?php
  $server = "localhost";
  $db = "fs23db";
  $username = "root";
  $password = "";

  try{
       $conn = new PDO("mysql:host=$server;dbname=$db;charset=UTF8", $username , $password)
  }catch(Exception $ex){
      echo "Connexion error:". $ex->getMessage();
  }