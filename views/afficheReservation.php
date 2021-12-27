<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once "header.php";
require_once "../connect.php";
require_once "../controller/reservationC.php";
$dbc=conn();
$result=afficherReservation($dbc);
?>
<section class="product-section  py-5">
        <div class="container" >
            <div class=" row justify-content-center pb-1">
                <div class="col-md-7 heading-section text-center">
                    <h1 class="font-weight-bold text-color back_title" style="font-size: 47px !important;">
                        All Reservations Made </h1>
                </div>
            </div>
        </div>
</section>
<div class="container" >
    <div class="row">
            <div class="col-sm-2 "></div>
            <aside class="col-sm-12 mt-5 mb-5 ">
                <table class="table table-bordered tableau">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Hour</th>
                            <th scope="col">Number of personnes</th>
                            <th scope="col">Pseudo</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                             echo"
                             <tr>
             <td>{$row['id']}</td>
             <td>{$row['date_reservation']}</td>
             <td>{$row['heure_arrive']}</td>
             <td>{$row['nombre_perso']}</td>
             <td>{$row['pseudo']}</td>
           
             <td>
                <form action='Supprimerreservation.php' method='post'>
                    <input type ='hidden' value='{$row['id']}' name='id_reservation'>
                    <button type= 'submit'  style='padding: 0; border: none; background: none;' 
                    name ='remove_reservation'><i class='fas fa-trash fa-2x' style=' color:#990000;'></i></button>
                    
                </form>
             </td>
             </tr>";
              }?>
              </tbody>
                </table>
            </aside>
        </div>
    </div>  
        <div style="margin-bottom: 200px;"> </div>
        
<?php
require_once "footer.php";
?>