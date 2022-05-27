<?php
    $user = [
        "name"=>"John",
        "role" => "administrator"
    ];

    // array to string
    $userToString = serialize($user);
   
  //  setcookie('user' , 'administrator' , time() + 60);
    setcookie('count' , '' , time() + 60);
    setcookie('place' , 'rabat' , time() + 60);
    setcookie('user', $userToString , time() + 60);



    // session: Yous must call the session_start before setting sessions

    session_start();
    $_SESSION['name'] = "Mohamed";

    $_SESSION['student'] = [
        "age" => 45,
        "fname" => "Abdoulay"
    ]
?>
<?php require_once './layouts/header.php' ?>
<button class="btn btn-danger">Save</button>
<?php require_once './layouts/footer.php' ?>

<?php
   



   // string to array ( object)
   $userUnserealized = unserialize( $_COOKIE["user"]);

   print_r($userUnserealized);



   echo $_SESSION['name'];


   print_r($_SESSION['student']);


   // remove session
   unset($_SESSION['student']);

   print_r($_SESSION['student']);

 
?>




