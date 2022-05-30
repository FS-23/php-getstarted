<?php
  
   $filePath =  __DIR__;
   echo $filePath;
   $horraires = file_get_contents($filePath);
   
   if(empty($horraires)){
       $horraires = [];
   }else{
       $horraires = unserialize($horraires);
   }


   $starttime = $_REQUEST['starttime'];
   $endtime = $_REQUEST['endtime'];

   file_put_contents('.\\files/horraire.txt' , "hello" );
   echo "$starttime  - $endtime ";
   if(!empty($starttime) && !empty($endtime)){
       echo "Is not empty \n";
       $horraires[] = "$starttime - $endtime";
   }

   print_r($horraires);











