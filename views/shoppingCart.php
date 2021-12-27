<?php
require_once '../connect.php';
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once 'header.php';
require_once 'ShoppingCart_Functions.php';
$dbc =conn();
/* Connection to the database*/




/* Change the quantity of an item in the shop card */
change_quantity();



/* The Navbar */


if (sizeof($_SESSION['cart']['items']) != 0){
echo "
<div id='header-img'>Shop Cart</div>
 <section class='page-section' id='menu'>
    <section class='container' style='margin-top:80px;'>
        <div class='row'>
            <div class='col-lg-8'>
                        <table  class='table  text-center bg-light'>

                            <tr id='tab-header-shopcart'>
                                <th>Picture</th>
                                <th>Dish</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                            ";
                        
                            
                               $grand_total=0;
                               $items_number=0;
                                foreach ($_SESSION['cart']['items'] as $key => $val) {
                                $sql = "select * from plat where id = $key ";
                                $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
                                $row = mysqli_fetch_assoc($result);
                                $total = $val* $row['prix'];
                                $grand_total += $total;
                                $items_number += 1 ;
                                $_SESSION['cart']['grand_total']= $grand_total;
                                $_SESSION['cart']['items_number']= $items_number;
                                
                                echo "

                             <tr id='tab-body'> 
                                   <td><img src='img/menu/1/{$row['photo']}' border=3 height=100 width=100></td>
                                 <td style='vertical-align: middle;'>{$row['nom']}</td>
                                 <td style='vertical-align: middle;'>{$row['prix']}</td>
                                 <td style='vertical-align: middle;'>
                                     <form action='ShoppingCart.php' method='POST'>
                                        <input type='hidden' value = '$key' name = 'id'>
                                        <input type='number'  min='0' max='50' class='form-control text-center'  value= $val  name='quan'>
                                     </form>
                                </td>
                                <td style='vertical-align: middle;'>$total</td>
                                <td style='vertical-align: middle;'>
                                    <form action='removeItem.php' method='POST'>
                                        <input type='hidden' value = '$key' name = 'id'>
                                        <button type='submit' name='remove'  style='padding: 0;border: none;background: none;'> <i class='fas fa-trash fa-2x' style=' color:#feaa00 ;'></i> </button>
                                    </form>
                                </td>
                              </tr>
                                   ";
                                }
                               
                           echo"     
                        </table>
                </div>
            
            <div class='col-md-4'>
                <div class='sticky'>
                    <div class='card'>

                        <div class='card-body bg-light'>
                            <p class='text-center text-dark'><large>Total Amount</large></p>
                            <hr>
                            <p class='text-right text-dark'>
                            <b> Grand Total: $grand_total <b>
                            </p>
                        </div>

                        <div class='card-footer' id='card-footer-shopcart'>
                            <form action='checkout.php'>
                            <button class='btn btn-block ' type='submit' id='checkout-btn' style='background:#feaa00;''>Proceed to Checkout</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
 </section>
 <p style='margin:300px;'></p>
  ";

}
else{
    echo"
    <div>
    <div class='row'>
        <div class='col-md-12'>
            
                <div >
                    <div class='text-center'>
                        <i id='empty_cart_icon' class='fa fa-shopping-cart' style='font-size:200px'></i>
                        <div id='empty_cart'>
                        <h3><strong>Your cart is currently empty </strong></h3>
                        <h6> Before proceed to checkout you must add some products to your shopping cart. You will find a lot of interesting products on our Menu page.</h6>
                        </div>
                        <form action='menu.php'>
                        <button class='btn btn-warning' type='submit' id='empty_cart_btn' >Continue Shopping</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    ";  

        echo"<p style='margin:300px;'></p>";
   }
require'footer.php';
?>
  
</body>
