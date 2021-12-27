<?php 
function ajouterCommande($dbc){
  $sql = "SELECT MAX(`id`) as 'n' FROM `commande`  ";
  $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
  $row = mysqli_fetch_assoc($result);
  $orderId = $row['n'] +1;
  if(isset($_POST['checkout-done-btn'])){
    $total_Price = $_SESSION['cart']['grand_total'];
    extract($_POST);
    $date = date("Y/m/d");
    $pseudo =$_SESSION['user']['pseudo'];
    $sql = "insert into  commande(id,date_commande, prix_total,modePayement,address, pseudo) VALUES ($orderId,'$date',$total_Price,'$paymentMethod','$address','$pseudo');";
    mysqli_query($dbc,$sql) or die("bad query: $sql");
    }
    return  $orderId ;
}

function ajouterListCommande($orderId,$dbc){
  foreach ($_SESSION['cart']['items'] as $key => $val) {
      $sql ="INSERT INTO list_commande(id_commande, id_plat, nbr_plat) VALUES ($orderId,$key,$val)";
      mysqli_query($dbc,$sql) or die("bad query: $sql");
 }
}
 function afficherCommande($dbc){
  $sql = "select * from commande";
  $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
  return $result;
 }
 function recupererListCommande($dbc,$order){
  $sql = "select * from list_commande where id_commande = $order";
    $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
    return $result;
 }
 function afficherPlatCommande($dbc,$id_plat){
  $sql = "select * from plat where id =$id_plat";
  $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
  return $result;
 }
 function supprimerCommande($dbc,$order){
    $sql = "delete from list_commande where id_commande = $order";
    $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
    $sql = "delete from commande where id= $order";
    $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
}
function recupererPlat($dbc,$id){
  $sql = "select * from plat where id = $id ";
  $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
  return $result;
}
?>