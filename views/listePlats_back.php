<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once "header.php";
include "../controller/platC.php"; 

    $platC=new platC();
    $listePlat=$platC->afficherPlat();

?>
<section class="product-section bg-img py-5">
        <div class="container">
            <div class=" row justify-content-center pb-1">
                <div class="col-md-7 heading-section text-center">
                    <h1 class="font-weight-bold text-color back_title ">
                        List dishes
                    </h1>
                </div>
            </div>
        </div>
</section>
<div class="container">
    <div class="row">
            <div class="col-sm-2"></div>
            <aside class="col-sm-10 mt-2 mb-5" style="margin-left: -7%;" >
                <center>
                    <form method="POST" action="ajoutPlat.php">
                <button class="Button">Add a dish</button>
            </form>
                <table class="table table-bordered tableau">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listePlat as $plat){ ?>
                        <tr>
                        <th scope="row" style="vertical-align: middle;"><?php echo $plat['id'];?></th>
                            <td><?php echo $plat['nom'] ?></td>
                            <td><?php echo $plat['prix'] ?></td>
                            <td><?php echo $plat['description'] ?></td>
                            <td><img src="img/menu/1/<?php echo $plat['photo'] ?>" alt="" border=3 height=100 width=100></img></td>
                            <td><form method="POST" action="modifierPlat.php">
                            <input type="hidden" value="<?PHP echo $plat['id']; ?>" name="id">
                           <input type="hidden" value="<?PHP echo $plat['nom']; ?>" name="nom">
                            <input type="hidden" value="<?PHP echo $plat['prix']; ?>" name="prix">
                           <input type="hidden" value="<?PHP echo $plat['description']; ?>" name="description">
                           <input type="hidden" value="<?PHP echo $plat['photo']; ?>" name="photo">
                           <button type="hidden" style="padding: 0;border: none;background: none;"> <i class="fas fa-edit fa-2x" style=" color:#ff9900;"></i> </button>
                          </form></td>
                           <td><form method="POST" action="supprimerPlatC.php">
                           <input type="hidden" value="<?PHP echo $plat['id']; ?>" name="id">
                           
                    <button type="hidden" style="padding: 0;border: none;background: none;"> <i class="fas fa-trash fa-2x" style=" color:#990000;"></i> </button>
                          </form></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                </center>
            </aside>
        </div>
    </div>
    <div style="margin-bottom: 80px;"> </div>
<?php
require_once "footer.php";
?>

