<?php
    setcookie('user' , 'administrator' , 3600);
?>
<?php require_once './layouts/header.php' ?>
<button class="btn btn-danger">Save</button>
<?php require_once './layouts/footer.php' ?>


<?php
  

   echo "Bienvenu ".$_COOKIE['user']
?>

