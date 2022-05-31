<?php

  $preferencesTab = [
      "nouriture" =>  ["1" => "Fait maison" , "2" => "Fast - food"],
      "couleur" =>  ["r" => "Rouge" , "b" => "Blanc" , "j" => "Jaune" , "o" => "Orange"],
      "saison" => ["e" => "été" , "h" => "Hiver"]
  ];
  
  echo "Vos preferences\n";
  $nouriture = readline("Nouriture fast-food (1) fait maison (2):");
  $couleur = readline("Couleur blanc (b) rouge (r) jaune (j) orange (o):");
  $saison = readline("Saison été (e) hiver (h): ");

  $nouritureTab = $preferencesTab["nouriture"];
  print_r($nouritureTab);
  die();
  $nouriture = $preferencesTab["nouriture"][$nouriture];
  $couleur = $preferencesTab["couleur"][$couleur];
  $saison = $preferencesTab["saison"][$saison];

  echo "Vous preferences sont:\n Nouriture: $nouriture \n Couleur: $couleur \n Saison: $saison";
  
  //$couleur = $couleurTab[$couleur]
// $preferences = ["couleur" => "blanc" , "nouriture" => "fast food" , "saison" => "été"];
// file_put_contents('prefenrences.txt' , serialize($preferences));
// $preference = unserialize(file_get_contents("prefenrences.txt")); 