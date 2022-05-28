<?php

    function somme($a , $b): int{
          if(!is_numeric($a) || !is_numeric($b) ){
               echo "Erreur d'execution: Veuillez specifier des nombres \n" ;

               return;

          }
          $result = $a + $b;
          return $result;
    }

    $sommeRes =  somme(100,"n");

    echo "result: $sommeRes"


?>
