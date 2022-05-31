<?php
  
   $filePath =  __DIR__.DIRECTORY_SEPARATOR."files" .DIRECTORY_SEPARATOR."horraire.txt";  //"\\files\\horraire.text";
   $horraires = file_get_contents($filePath);
   
   if(empty($horraires)){
       $horraires = [];
   }else{
       $horraires = unserialize($horraires);
   }

   if(count($_POST) > 0){
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
    
        if(!empty($starttime) && !empty($endtime)){
            $horraires[] = "$starttime - $endtime";
            file_put_contents($filePath , serialize($horraires));
        }
   }













