<?php
   
   //  $horraires = [
   //     "12:30 - 15:20",
   //     "16:00 - 18:00"
   //  ];

   //  $conetnt2 = "Au revoir a demain";

   //  file_put_contents('./datas/files/test2.txt', serialize($horraires));


   //  echo "-------------- File content ------------ \n";

   //  $content = unserialize(file_get_contents("./datas/files/test2.txt"));

   //  var_dump(12);


   $fileContent = file_get_contents('./datas/files/horraire.txt');

  // echo $fileContent;


   file_put_contents('./datas/files/score.txt' , " Votre score est: 8" , FILE_APPEND);



?>