<?php
    setcookie('user' , 'administrator' , time() + 60);
    setcookie('count' , '15' , time() + 60);
    setcookie('place' , 'rabat' , time() + 60);
?>
<?php require_once './layouts/header.php' ?>
<button class="btn btn-danger">Save</button>
<?php require_once './layouts/footer.php' ?>

<?php
   print_r($_COOKIE);
   echo "Bienvenu ".$_COOKIE['user'];
   setcookie('user', '' , time() - 1)
?>



referencioelle: 26:00

