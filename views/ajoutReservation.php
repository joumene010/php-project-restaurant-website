<?php 


require_once '../connect.php';
require '../controller/reservationC.php';
session_start();
require_once 'header.php';

$dbc= conn();
$verif = ajoutReservation($dbc,$_SESSION['user']['pseudo']);
if($verif==1){
    echo"
    <div>
    <div class='row'>
        <div class='col-md-12' style='margin-top:100px;'>
            
                <div >
                    <div class='text-center'>
                        <i class='far fa-calendar-check' aria-hidden='true' style='font-size:200px '></i>
                        <div id='empty_cart'>
                        <h3 style=' margin-top:10px'><strong>your reservation has been made </strong></h3>
                        </div>
                        <form action='home.php'>
                        <button class='btn btn-warning' type='submit' id='empty_cart_btn' >Home</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p style='margin:300px;'></p>";

}
else {
    echo"
    <div>
    <div class='row'>
        <div class='col-md-12' style='margin-top:100px;'>
            
                <div >
                    <div class='text-center'>
                    <i class='far fa-calendar-times' aria-hidden='true' style='font-size:200px '></i>
                        <div id='empty_cart'>
                        <h3 style=' margin-top:10px'><strong>this date is not available  </strong></h3>
                        </div>
                        <form action='reservation.php'>
                        <button class='btn btn-warning' type='submit' id='empty_cart_btn' >Try an other date</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p style='margin:300px;'></p>";
}

require_once 'footer.php';
?>