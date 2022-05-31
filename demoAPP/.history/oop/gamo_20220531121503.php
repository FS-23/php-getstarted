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

  $players = [];

  for( $i= 1; $i <= 3 ;$i++){
    $playName = readline("Nom du joueur $i :");
    $player = new Player($play1Name);
     
    // $players[] = $player

      array_push($players ,  $player);

  }


  print_r($players);
