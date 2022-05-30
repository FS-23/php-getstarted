<?php
    $content =  file_get_contents('./datas/files/test.txt');


    $conetnt2 = "Au revoir a demain";

    file_put_contents('./datas/files/test2.txt', $conetnt2);

    echo $content;

?>