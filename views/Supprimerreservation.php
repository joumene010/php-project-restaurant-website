<?php 
 require_once "../connect.php";
 require_once "../controller/reservationC.php";
 $dbc=conn();
 if (isset ($_POST['remove_reservation']))
  { extract($_POST);
    supprimerReservation($dbc,$id_reservation);
    header("Location:afficheReservation.php");
  }
?>