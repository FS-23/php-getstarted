<?php
   $servername = "localhost";
   $db = "Restaurant";
   $username = "root";
   $password = "";

   try{

      if(array_key_exists("title" , $_POST) && array_key_exists("ingredient" , $_POST)  && array_key_exists("price" , $_POST) ){
         
         $title = $_POST['title'];
         $ingredient = $_POST['ingredient'];
         $price = $_POST['price'];

         $con = new PDO("mysql:host=$servername;dbname=$db;charset=utf8" , $username , $password);

         echo "Connected successfully !!!\n";

         $sql = "insert into menus(label , ingredient , price) values(:label , :ingredient , :price)";

         $statement = $con->prepare($sql);

         $statement->bindParam('label', $title);
         $statement->bindParam('ingredient', $ingredient);
         $statement->bindParam('price', $price);

         $statement -> execute();
         
         echo "Created successfully!!!\n";

       //  echo "Title: $title - price: $price - ingredient: $ingredient";

      }
      

   }catch(Exception $ex){

       echo "Erreur de requete:".$ex->getMessage();

   }

   header("Location:/");