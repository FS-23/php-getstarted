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

      function construct($name , $size){
            $this -> name = $name;
            $this -> size = $size;
      }
  }




  class Student extends Person{

     public $level;
     public $ecole;

     function __construct($name , $size , $level ,$ecole){
         //super($name , $size );
         parent::construct($name , $size);
         $this -> name = $name;
         $this -> size = $size;
         $this -> level = $level;
         $this -> ecole = $ecole;
     }


     function learn(){
         echo "\n". $this.name . " started learning";
     }
  }

  $person1 = new Person("Youssef", 1.84);

  $student1 = new Student("Nour", 1.86 , "A" , "3WA");

  var_dump($student1);


//   $person1 -> name = "Youssef";
//   $person1 -> size = "Youssef";
//   $person1 -> level = "Youssef";
//   $person1 -> name = "Youssef";
//   $person1 -> name = "Youssef";
//   $person1 -> setSize(1.84);
//   $person1 -> favorigteFood = "Poulet rotie";

  var_dump($person1);


  echo "Person name:".$person1->name;
