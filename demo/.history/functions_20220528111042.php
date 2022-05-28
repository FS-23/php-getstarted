<?php

    function somme($a , $b): int{
          if(!is_numeric($a) || !is_numeric($b) ){
               echo "Veuillez specifier des nombres";
               return;
          }
          $result = $a + $b;
          return $result;
    }

    $sommeRes =  somme(100,"n");

    echo "result: $sommeRes"


?>
