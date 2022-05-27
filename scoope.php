<?php

    $name = "akhenaton" ; 
    $count = 12 ;
    $student = [] ;

    // echo "name : $name \n";

    // print_r ($GLOBALS)  ;

    function test (){
        // global $name ;

        $GLOBALS["name"] = "noor";
        
        echo "name inside function :  \n".$GLOBALS["name"];
    }

   // test();


    $students = [1,2,3,4,5,];

    
    print_r($students);

    foreach($students as $index => $item){

         $students[$index] = $students[$index]  + 100 ;
         echo " \n$index :$item \n";
    }

    print_r($students);

?>


