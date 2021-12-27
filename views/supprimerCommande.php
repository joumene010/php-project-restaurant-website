<?php
require '../connect.php';
require_once 'header.php';
require_once '../controller/CommandeC.php';
$dbc=conn();
 if(isset($_POST['remove-order'])){
    extract($_POST);
    supprimerCommande($dbc,$order);
    header('Location:afficherCommande.php');
}

?>