<?php
session_start();
require_once "header.php";
include "../controller/platC.php";
 
    $platC=new platC();
    $listePlats=$platC->afficherPlat();
require_once "shoppingCart_functions.php";
if(isset($_SESSION['user'])){
add_item();
};
?>
<body>
<div id='header-img' style="margin-bottom: 5%;">Menu</div>
<section class="product-section bg-img py-3  ">
        <div class="container">
            <div class="row">
                <?php
                foreach($listePlats as $plat){
                ?>
                <div class="col-md-3 d-flex">
                    <div class="product glow" >
                     <div class="img d-flex align-items-center justify-content-center"
                      style="background-image:url('img/menu/1/<?php echo $plat["photo"];?>');">
                    <form method="POST" action="#">
                       <div class="icons">
                        <p class="icon-block d-flex">
                     <a href="#"class="d-flex align-items-center justify-content-center">
                        <input type="hidden" value="<?php echo $plat['id']; ?>" name="id">
                         <button class="button" name="submit1"><i class="fas fa-shopping-cart"></i></button>
                     </form>
                     </a>
                    </a>
                    </p>
                    </div>
                     </div>
                     <div class="text text-center">
                         <span class="category font-weight-bold"><?php echo $plat['nom']; ?></span>
                         <h2 class="text-dark"><?php echo $plat['description']; ?></h2>
                         <span class="price"><?php echo $plat['prix']."$"; ?></span>
                     </div>
                </div>
                </div>
                <?php
                }
            ?>
            </div>
        </div>
</section>
</body>
<?php
require_once "footer.php";
?>