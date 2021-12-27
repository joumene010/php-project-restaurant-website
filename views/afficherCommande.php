<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once 'header.php';
require '../connect.php';

$dbc= conn();
require_once '../controller/CommandeC.php';
$result=afficherCommande($dbc);
?> 
<body>
<section class="product-section bg-img py-5">
        <div class="container">
            <div class=" row justify-content-center pb-1">
                <div class="col-md-7 heading-section text-center">
                    <h1 class="font-weight-bold text-color back_title ">
                        List orders
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
                <table class="table table-bordered tableau">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User pseudo</th>
                            <th>Order Date</th>
                            <th>Total Price</th>
                            <th>Address</th>
                            <th>Payment Method</th>
                            <th>Show order</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                       $id = $row['id'];
                        echo"
                            <tr>
                                <td>{$row['id']}</td>
                                <td>{$row['pseudo']}</td>
                                <td>{$row['date_commande']}</td>
                                <td>{$row['prix_total']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['modePayement']}</td>
                                <td>
                                    <form action='afficherPlatCommande.php' method='post'>
                                       <input type ='hidden' value='{$row['id']}' name='order'>
                                       <button type='submit' class='btn center' name='show-order'><i class='fas fa-utensils fa-2x' style='color:#ff9900;  margin-right:100px;'></i></button>
                                    </form>
                                </td>
                                <td>
                                <form action='supprimerCommande.php' method='post'>
                                   <input type ='hidden' value='{$row['id']}' name='order'>
                                   <button type='submit' name='remove-order' style='padding: 0;border: none;background: none;'> <i class='fas fa-trash fa-2x' style='color:#990000;'></i> </button>                                
                                   </form>
                            </td>
                            </tr>
                            
                            ";}

?>
</table>
 </tbody>
                </table>
                </center>
            </aside>
        </div>
    </div>
    <div style="margin-bottom: 80px;"> </div>

    <p style="margin:200px;"></p>
<?php
require_once "footer.php";
?>