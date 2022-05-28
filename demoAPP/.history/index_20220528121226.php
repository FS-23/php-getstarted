
<?php require_once './layouts/header.php' ?>
<?php
    $horraire = [
        "08:00 - 12:00",
        "12:30 - 18:00", 
        "19:30 - 22:00"
    ];
?>
<div class="row mx-0">
    <div class="col-8">

    </div>
    <div class="col-4 ">
        <div class="shadow-sm bg-light p-3 mt-5">
            <h5> horraires d'ouverture</h5>
            <div class="mt-2">
                   <?php
                        foreach($horraire as $item)
                           echo "<p class='alert alert-info'> $item </p>"
                   ?>
            </div>
        </div>
    </div>
</div>

<?php require_once './layouts/footer.php' ?>





