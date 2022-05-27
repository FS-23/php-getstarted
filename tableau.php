<?php
      $player = readline('Entrer votre nom:');
      echo "Bienvenue $player \n";
      $scores = [12,0,8 ];
      $score1 = $scores[0];


      echo "First score: $score1 \n";
      $scores[] = 145;
      $scores[] = 600;
      // show array content
      //   print_r($scores);
      echo "\n";
      $arrayCount = count($scores);
    
      echo "Array length:". $arrayCount ."\n";
      foreach($scores as $index => $item){
          echo "$index : $item \n";
      }

    //   echo "Bonjour $player \n";
    //   echo "Voici la liste de vos score: \n";
    //   echo "J1: $score1 \nj2: $score2 \nJ3: $score3"


    $retry = "yes";

    echo strtoupper($retry)
?>