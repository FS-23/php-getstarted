<?php
  class Player{
      public $name;
      public $score = 0;
      public $level = "beginner";

     function __construct($name){
        $this->name = $name;
        // $this->score = 0;
        // $this -> level = "beginner";
     }


      function displayScore(){
             echo $this->name ." votre score est ".$this->score;
      }
  }


  $play1Name = readline("Nom du premier joueur");
  $play1 = new Player($play1Name);


  print_r($play1);
