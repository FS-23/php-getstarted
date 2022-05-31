
<?php require_once './layouts/header.php' ?>
<?php
   // require_once ('datas/horraire-with-cookies.php');
   require_once ('datas/horraire-with-file.php');
   require_once ('pdo-mysql/select-menu.php');

  
?>

<div class="row mx-0">
    <div class="col-8">
           <div class="shadow-sm bg-light p-3 mt-5">
               <h5>Liste des menus</h5>
               <div class="mt-3 p-2">
                   <div class="row mx-0">
                       <?php foreach($menus as $menu): ?>
                         <div class="col-12 col-sm-2 col-lg-4 mt-2">
                              <div class="p-2 bg-white h-100">
                                    <h5><?= $menu['label'] ?></h5>
                                    <p><?= $menu['ingredient'] ?></p>
                                    <strong class="text-info" style="font-size: 12"><?= $menu['price'] ?> MAD</strong>
                              </div>
                         </div>
                       <?php endforeach; ?>
                   </div>
               </div>

               <table class="table table-bordered d-none">
                   <thead>
                       <th>Nom du menu</th>
                       <th>Ingredients</th>
                       <th>Prix</th>
                   </thead>
                   <tbody>
                      <?php foreach($menus as $menu): ?>
                         <tr>
                            <td><?= $menu['label'] ?></td>
                            <td><?= $menu['ingredient'] ?></td>
                            <td><?= $menu['price'] ?> MAD</td>
                         </tr>
                      <?php endforeach; ?>
                   </tbody>
               </table>
           </div>
           <div class="shadow-sm bg-light p-3 mt-5">
               <div class="p-3 bordered">
                   <h5> Nouveau menu </h5>
                   <form action="/pdo-mysql/create-menu.php" method="post">
                       <div class="form-group">
                           <label for="" class="form-label">Title</label>
                           <input type="text" name="title" required class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="" class="form-label">Ingredient</label>
                           <textarea name="ingredient"  required  class="form-control"></textarea>
                       </div>

                       <div class="form-group">
                           <label for="" class="form-label">Price</label>
                           <input type="number"  required name="price" class="form-control">
                       </div>
                       <div class="mt-3">
                           <button class="btn btn-primary">Enregistrer</button>
                       </div>
                   </form>
               </div>
           </div>
    </div>

    <div class="col-4 ">
        <div class="shadow-sm bg-dark text-white p-3 mt-5">
            <h5> horraires d'ouverture</h5>
            <div class="mt-2">
                   <?php foreach($horraires as $item):  ?>
                       <p><?php echo $item ?></p> 
                   <?php endforeach; ?>
                   <div>
                       <form action=""  method="post">
                           <div class="row mx-0">
                             <input type="time" class="form-control col-4 mt-2" name="starttime">
                             <input type="time" class="form-control col-4 mt-2" name="endtime">
                             <button class="btn btn-primary mt-3">Enregistrer</button>
                           </div>
                            
                            
                            
                       </form>


                    
                       <div class="d-none">
                           strattime:  <?php echo $_REQUEST['starttime'] ?>
                           endtime:  <?php echo $_REQUEST['endtime'] ?>
                       </div>
                       <?php 
                          
                       ?>
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





