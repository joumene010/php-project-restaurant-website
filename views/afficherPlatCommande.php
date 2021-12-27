<?php
require '../connect.php';
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once 'header.php';
require_once '../controller/CommandeC.php'

?> 
<section class="product-section bg-img py-5">
        <div class="container">
            <div class=" row justify-content-center pb-1">
                <div class="col-md-7 heading-section text-center">
                    <h1 class="font-weight-bold text-color back_title ">
                        Order
                    </h1>
                </div>
            </div>
        </div>
</section>
<body>
<div class="container">
    <div class="row">
            <div class="col-sm-2"></div>
            <aside class="col-sm-10 mt-2 mb-5" style="margin-left: -7%;" >
                <center>
                <table class="table table-bordered tableau">
                    <thead>
                        <tr>
                            <th scope="col">Picture</th>
                            <th scope="col">Dish</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['show-order'])){
                        extract($_POST);
                        $dbc= conn();
                        $result=recupererListCommande($dbc,$order);
                                 while ($row = mysqli_fetch_assoc($result)) {
                                    $result2=afficherPlatCommande($dbc,$row['id_plat']);
                                    $row2 = mysqli_fetch_assoc($result2);
                                    echo"
                                    <tr>
                                    <td><img src='img/menu/1/{$row2['photo']}' border=3 height=100 width=100></td>
                                    <td>{$row2['nom']}</td>
                                    <td>{$row2['prix']}</td>
                                    <td>{$row['nbr_plat']}</td>
                                    </tr>
                                    ";
                                }
                            }
                        ?>
                            
                        </tbody>
                    </table>
                </center>
            </aside>
        </div>
    </div>
