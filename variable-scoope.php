<?php 
   $user = "John";
   $count = 12;
   $place = "RABAT";
   echo "User: $user \n";


   // this will throw an error cause whe can't use global variable inside a function

   function alertUser(){
       $user = "William";
       echo "user in function: $user \n";
   }

   function alertUserWithGlobal(){
       global $user;
       $user = "Conor";
       echo "user with global: $user \n";
   }

   function alertUserWithGLOBAL_VAR(){
         $GLOBALS['user'] = " User with GLOBAL";
         echo "user with GLOBAL: $".$GLOBALS['user'] ." \n";
   }

   function increment(){
       static $count = 0;
       $count ++;
       echo "\nCount value:$count \n";
   }
   

   alertUser();
   alertUserWithGlobal();
   alertUserWithGLOBAL_VAR();
   echo  "my user: $user";

   increment();
   increment();
   increment();
   increment();
   increment();
   


