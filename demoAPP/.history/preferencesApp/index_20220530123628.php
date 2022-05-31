<?php

$preferences = ["couleur" => "blanc" , "nouriture" => "fast food" , "saison" => "été"];
file_put_contents('prefenrences.txt' , serialize($preferences));
 $preference = unserialize(file_get_contents("prefenrences.txt")); 