<?php

    
    $horraire = $_COOKIE['horraire'];

    if(empty($horraire)){
        setcookie('horraire', serialize([]), time()+ 10000000);
    }
    $user = "admin";
    // print_r($_SERVER);
    // print_r($_REQUEST);                 
    $starttime = $_REQUEST['starttime'];
    $endtime = $_REQUEST['endtime'];

    $horraire = unserialize($_COOKIE['horraire']);
    if(!empty($starttime) && !empty($endtime)){
        $horraire[] = "$starttime - $endtime";
        setcookie('horraire', serialize( $horraire), time()+ 10000000);
    }
?>