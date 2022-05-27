<?php
    //   $fname = readline("Veuillez entrer votre nom:");
    //   $lname = readline("Veuillez entrer votre prenom");
    //   $address = readline("Veuillez entrer votre emplacement:");
    //   $age = (int)readline("Veuillez entrer votre age:");
      

    //   echo "Bienvenu $fname $lname vous avez $age et vous habitez à $address";

    //    $level = readline("")

    //   if($age < 18){
    //       echo "Vous etes mineur \n";
    //   }elseif($age === 18){ 
    //         echo "Vous venez juste d'etre majeur";
    //   }else{
    //       echo "Vous etes  déja majeur \n";
    //   }

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
             break;
    }
    // echo "Votre niveau: $level";