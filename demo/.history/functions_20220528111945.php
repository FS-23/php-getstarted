<?php

    function somme(int $a , int $b): int{
          if(!is_numeric($a) || !is_numeric($b) ){
               echo "Erreur d'execution: Veuillez specifier des nombres \n" ;
               return 0;
          }
          $result = $a + $b;
          return $result;
    }


    function askForSum(){
        $nbr1 = readline('Première nombre:');
        $nbr2 = readline('Deuxieme nombre:');


        $result = somme($nbr1 , $nbr2);

        echo "La somme est: $result";
    }

    askForSum();
    

  

?>
