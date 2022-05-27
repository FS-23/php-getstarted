<?php
    setcookie('user' , 'administrator');
?>
<?php require_once './layouts/header.php' ?>
<button class="btn btn-danger">Save</button>
<?php require_once './layouts/footer.php' ?>


<?php
   print_r($_COOKIE)

   echo "Bienvenu ".$_COOKIE['user']
?>

