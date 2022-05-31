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

  echo "Regles du jeu:\n
        Jouer a ce jeu vous fait augmenter de niveau.
        Pour un score en dessous de 100 vous aurez le niveau debutant.
        Le niveau champion est un score superieur ou egale a 100.
        \n\n
        Le jeu consiste a deviner un chiffre entre 1 et 5.\n
        si trouver vous gagner 40 points sinon 0. \n\n\n
       ";
  foreach($players as $index => $player){
      $begin = readline("Joueur ".($index+1)." vous avez 5 tentatives voulez vous commencer ? oui (o) non (n):");
      if(strtolower($begin) == 'o'){
           echo "\n-------------------- Tour de ". $player->name ." -----------------------";
           for($i = 1 ; $i<=5 ;$i++){
               $randValue = rand(1,5);
               $result = readline("\n\nTentative $i. Veuillez entrer un nombre entre 1 et 5:");
               while(empty($result) || !is_numeric($result)){
                  $result = readline("Veuillez entrer un nombre valide:");
               }

               $result = (int)$result;

               if($result == $randValue){
                    $player->score += 40;
               }


           }
      } 
  }

//   for($i=0 ; $i<count($player) ; $i++){
//       $player = $players[i];
//   }


//   print_r($players);
