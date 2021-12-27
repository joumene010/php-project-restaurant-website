
<?php
require_once '../connect.php';
require '../controller/reservationC.php';
require_once 'header.php';
$dbc = conn();
annulerReservation($dbc);
header('Location:home.php');


?>