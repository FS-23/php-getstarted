<?php
    setcookie('user' , 'administrator' , time()+ 6);
?>
<?php require_once './layouts/header.php' ?>
<button class="btn btn-danger">Save</button>
<?php require_once './layouts/footer.php' ?>

<?php
   echo "Bienvenu ".$_COOKIE['user']
?>



referencioelle: 26:00

