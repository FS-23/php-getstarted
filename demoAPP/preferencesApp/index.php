<?php
  $preferencesFilePath =  __DIR__.DIRECTORY_SEPARATOR."preferences.txt" ;// "D:\Projects\3WAcademy\FS-23\Apps\PHP\demoAPP\preferencesApp"\preferences.txt;
  $oldPreferences = unserialize(file_get_contents($preferencesFilePath)) ;

      
  if(!empty($oldPreferences)){
     $nouriture =  $oldPreferences['nouriture'];
     $couleur =  $oldPreferences['couleur'];
     $saison = $oldPreferences['saison'] ;
     echo "\nVous preferences sont:\nNouriture: $nouriture \nCouleur:$couleur \nSaison: $saison \n"; 
  }

  $preferencesTab = [
      "nouriture" =>  ["1" => "Fait maison" , "2" => "Fast - food"],
      "couleur" =>  ["r" => "Rouge" , "b" => "Blanc" , "j" => "Jaune" , "o" => "Orange"],
      "saison" => ["e" => "été" , "h" => "Hiver"]
  ];
  
  echo "Vos preferences\n";
  $nouriture = readline("Nouriture fast-food (1) fait maison (2):");
  $couleur = readline("Couleur blanc (b) rouge (r) jaune (j) orange (o):");
  $saison = readline("Saison été (e) hiver (h): ");

  $nouriture = $preferencesTab["nouriture"][$nouriture];
  $couleur = $preferencesTab["couleur"][$couleur];
  $saison = $preferencesTab["saison"][$saison];

  echo "Vous nouvelles preferences:\n Nouriture: $nouriture \n Couleur: $couleur \n Saison: $saison";
  
  $preferences = ["couleur" => $couleur , "nouriture" => $nouriture , "saison" => $saison];
  file_put_contents($preferencesFilePath , serialize($preferences));
 // $preference = unserialize(file_get_contents($preferencesFilePath)); 