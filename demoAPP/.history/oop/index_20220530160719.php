<?php
  class Person {
      public $name;
      private $size;
      function __construct($name , $size){
          $this -> name = $name;
          $this -> size = $size;
          echo "New instance created\n";
      }
      function setSize($sizeValue){
          $this -> size = $sizeValue;
      }
      function __destruct(){
          echo "\nInstance removed !!!";
      }
  }

  class Student{
     public $name;
     public $size;
     public $level;
     public $ecole;

     function __construct($name , $size , $level ,$ecole){

     }


     function learn(){
         echo $this.name . " started learning";
     }
  }

  $person1 = new Person();

  $student1 = 


//   $person1 -> name = "Youssef";
//   $person1 -> size = "Youssef";
//   $person1 -> level = "Youssef";
//   $person1 -> name = "Youssef";
//   $person1 -> name = "Youssef";
//   $person1 -> setSize(1.84);
//   $person1 -> favorigteFood = "Poulet rotie";

  var_dump($person1);


  echo "Person name:".$person1->name;
