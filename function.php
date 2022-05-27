
<?php

  function Choose(){
    $level = readline('Choisir le niveau: tres facile (1)  , facile (2) , intermediaire (3) , dificile (4) , pro (5):');
    switch($level){
        case 1:
            echo "Niveau tres facile: construire une (R1)";
            break;
        case 2: 
            echo "Niveau facile: Construire un (R2) avec jardin";
            break;
        case 3: 
            echo "Niveau intermediaire: construire une villa de 5 etage avec jardin et piscine";
            break;
        case 4:
             echo "Niveau difficile: contruire un quartier residentiel";
             break;
        case 5: 
             echo "Niveau professionel: Contruire une ville avec un grand marché et un port";
             break;
        default:
             echo "Niveau non reconnu. \n";
             $retry = readline("Voullez vous réesayer ? non (n) , oui (o):");
             echo "Retry: $retry";
             if($retry == "o" || $retry == "oui"){
                 Choose();
             }
             break;
             
    }
  }


  function somme(int $a , int $b): int{

      $result = $a + $b;
      return $result;

  }


  

  function doSum(){
      $nbr1 = (int) readline('Entre le premier nbr: ');

      while (empty($nbr1) || !is_numeric($nbr1)) {
        $nbr1 = readline('Entre un nombre valide: ');
      }

      $nbr2 = readline('Entre le deuxieme nbr: ');
      while (empty($nbr2) || !is_numeric($nbr2)) {
        $nbr2 = readline('Entre un nombre valide: ');
      }

      $nbr1 = (int)$nbr1;
      $nbr2 = (int)$nbr2;

      return  somme($nbr1, $nbr2);
  }

//   $resultsum = doSum();

//   echo $resultsum;



  function is_palindrom($text){

         if($text == strrev($text)){ 
            echo "Votre text est un palindrome";
         }else  echo "Votre text n'est pas un palindrome";
  }
//   function multiplication($nbr1 , $nbr2 , $nbr3){

//        return $nbr1 * $nbr2 * $nbr3;
//   }


//   $multiRes =  multiplication(4,7,52);
// //   echo  $multiRes;

  
//   $resultSomme =  somme(100,'yyy45');

 // echo $resultSomme

  //Choose();

  is_palindrom('lol')
?>
