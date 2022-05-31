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

    while(empty($playName) || is_numeric($playName)){
        $playName = readline("Nom joueur $i incorrect veuillez réessayrer:");
    }
    $player = new Player($playName);
     
    // $players[] = $player

      array_push($players ,  $player);

  }

  // 5 tentative
  // gagner = 40 pts et perdre = 0pts
  // si score >=100 alors level = champion

  foreach($players as $index => $player){
      $begin = readline("Joueur ".($index+1)." vous avez 5 tentatives \n voulez vous commencer ? oui (o) non (n)"); 
  }

//   for($i=0 ; $i<count($player) ; $i++){
//       $player = $players[i];
//   }


//   print_r($players);
