
<?php require_once './layouts/header.php' ?>
<?php
    $horraire = [
        "08:00 - 12:00",
        "12:30 - 18:00", 
        "19:30 - 22:00"
    ];


    $user = "admin"

?>
<div class="row mx-0">
    <div class="col-8">
                 <?php if($user == "admin") : ?>
                    <div class="alert alert-success w-25"> Vous avez toutes les autorisations</div>

                   <?php else: ?>
                    <div class="alert alert-danger w-25"> Vous n'avez pas les autorisations</div>
                 <?php endif ?>       
    </div>
    <div class="col-4 ">
        <div class="shadow-sm bg-light p-3 mt-5">
            <h5> horraires d'ouverture</h5>
            <div class="mt-2">
                   <?php foreach($horraire as $item):  ?>
                       <p><?php echo $item ?></p> 
                   <?php endforeach; ?>
                   <div>
                       <form action="">
                            <input type="time" name="starttime">
                            <input type="time" name="endtime">
                            <button>Enregistrer</button>
                       </form>
                   </div>
                  <?php
                    // if($user == "admin") 
                    //  echo '<div class="alert alert-success"> Vous avez toutes les autorisations</div>';
                    // else
                    //   echo '<div class="alert alert-danger"> Vous n\'avez pas les autorisations</div>';
                  ?>
            </div>
        </div>
    </div>
</div>

<?php require_once './layouts/footer.php' ?>





