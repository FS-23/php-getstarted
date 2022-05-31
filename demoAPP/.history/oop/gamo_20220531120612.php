<?php
  class Player{
      public $name;
      public $score;
      public $level;

     function __construct($name){
        $this->name = $name;
        $this->score = 0;
        $this -> level = "beginner";
     }


      function displayScore(){
             echo $this->name ." votre score est ".$this->score;
      }
  }


  $play1 = new Player('Youssef', 0 , "biginner");


  print_r($play1);
