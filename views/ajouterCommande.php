<?php
SESSION_START();
require_once '../connect.php';
require '../controller/CommandeC.php';
require_once 'header.php';
$dbc = conn();
$orderId = ajouterCommande($dbc);
ajouterListCommande($orderId,$dbc);
$_SESSION['cart']['items']= array();
?>
 <div>
    <div class="row">
        <div class="col-md-12" style="margin-top:100px;">
            
                <div >
                    <div class="text-center">
                        <i class="fa fa-check-circle" aria-hidden="true" style="font-size:200px "></i>
                        <div id="empty_cart">
                        <h3 style=" margin-top:10px"><strong>your order has been placed </strong></h3>
                        </div>
                        <form action="menu.php">
                        <button class="btn btn-warning" type="submit" id="empty_cart_btn" >Continue Shopping</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 </div>

        <p style="margin:300px;"></p>

<?php
   require'footer.php';
?>
  


