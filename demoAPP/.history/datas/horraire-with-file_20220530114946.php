<?php
  
   $filePath =  __DIR__.DIRECTORY_SEPARATOR."files" .DIRECTORY_SEPARATOR."horraire.txt";  //"\\files\\horraire.text";
   $horraires = file_get_contents($filePath);
   
   if(empty($horraires)){
       $horraires = [];
   }else{
       $horraires = unserialize($horraires);
   }


   $starttime = $_REQUEST['starttime'];
   $endtime = $_REQUEST['endtime'];

   if(!empty($starttime) && !empty($endtime)){
       $horraires[] = "$starttime - $endtime";
       file_put_contents($filePath , serialize($horraires));
   }












