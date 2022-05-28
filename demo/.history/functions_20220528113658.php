<?php

    function somme(int $a , int $b): int{

          if($a === 1){
              echo "Votre premier nombre est 1";
          }
          if(!is_numeric($a) || !is_numeric($b) ){
               echo "Erreur d'execution: Veuillez specifier des nombres \n" ;
               return 0;
          }
          $result = $a + $b;
          return $result;
    }

    function askForSum(){
        $nbr1 = readline('Première nombre:');
        while(empty($nbr1) || !is_numeric($nbr1)){
            $nbr1 = readline("Veuillez entrer un nombre:");
        }
        $nbr2 = readline('Deuxieme nombre:');

        while(empty($nbr2) || !is_numeric($nbr2)){
            $nbr2 = readline("Veuillez entrer un nombre:");
        }

        $nbr1 = (int)$nbr1;
        $nbr2 = (int)$nbr2;
        $result = somme($nbr1 , $nbr2);

        echo "La somme est: $result";
    }

    askForSum();
    

  
   setcookie("name" , "Youssef")

?>
