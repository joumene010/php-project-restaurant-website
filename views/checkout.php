<?php 

session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require 'header.php';
require '../connect.php';
require '../controller/CommandeC.php';
$dbc= conn();

?>

<body>
<div id='header-img'>Checkout </div>
  <div class="container">
    <nav style="margin-top:80px"></nav>
    <div class="row">
      <div class='col-lg-8' >
        <h4 id="checkout-title" class="mb-3">Billing address</h4>
          <div class="card" id="checkout-ba">
            <div >
              <form id="checkout-form"  method="post" action="ajouterCommande.php">
                <div class="mb-3">
                  <label for="user">Full Name</label>
                    <input type="user" class="form-control" id="user" value="<?php echo $_SESSION['user']['fullname']?>">
                </div>
                <div class="mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['user']['email']?>">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                </div>
                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                  <div class="custom-control custom-radio">
                    <input id="credit" value="Credit card" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="debit" value="Debit card" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Debit card</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input id="paypal" value="Paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">Paypal</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name"  required>
                    <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" min-lenght="3" max-lenght="3" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="date" class="form-control" id="cc-expiration"  required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                 <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv"  min-lenght="3" max-lenght="3" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <button name="checkout-done-btn" class="btn  btn-lg btn-block" type="submit" style='color: #f2f4f3;'>Continue to checkout</button>
            </form>
          </div>
        </div>
      </div>
      <?php  echo"
      <div  class='col-lg-4 '>
      <h4 id='checkout-title' class='d-flex justify-content-between align-items-center mb-3'>
      <span>Your cart</span>
      <span class='badge badge-secondary badge-pill'><?php echo'{$_SESSION['cart']['items_number']}';?></span>
      </h4>
      <div class='card' id='checkout-cart'>
        <ul class='list-group mb-3'>";
          foreach ($_SESSION['cart']['items'] as $key => $val){
            $sql = "select * from plat where id = $key ";
            $result = mysqli_query($dbc,$sql) or die('bad query: $sql');
            $row = mysqli_fetch_assoc($result);
            $total = $val* $row['prix'];
            echo"
            <li class='list-group-item d-flex justify-content-between lh-condensed'>
              <div>
                  <h6 class='my-0'>{$row['nom']}</h6>
                </div>
                <span class='text-muted'>$total</span>
            </li>
                ";} ?>     
                <div  style='  font-weight: bold; background-color:#bdaae8; color:#f7f4ef;' class='card-footer d-flex justify-content-between'>
                    <span>Total</span>
                    <strong><?php echo $_SESSION['cart']['grand_total'] ?></strong>
                </div>
            </ul>
         </div>
    </div>
  </div>
</div>
  <p style="margin:300px;"></p>
    <?php require'footer.php';?>
</body>