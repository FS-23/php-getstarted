<?php
   $filePath = "./files/horraire.txt";
   $horraires = file_get_contents($filePath);
   
   if(empty($horraires)){
       $horraires = [];
   }else{
       $horraires = unserialize($horraires);
   }


   $starttime = $_REQUEST['starttime'];
   $endtime = $_REQUEST['endtime'];

   echo "$starttime  - $endtime ";
   if(!empty($starttime) && !empty($endtime)){
       echo "Is not empty \n";
       $horraires[] = "$starttime - $endtime";
       file_put_contents($filePath , serialize($horraires), FILE_APPEND );
   }

   print_r($horraires);











