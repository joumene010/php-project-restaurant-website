<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GUSTY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/css.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" href="img/le-restaurant.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body  data-spy="scroll" data-target=".navbar-fixed-top">
    <section>
        <nav class="navbar navbar-expand-lg navbar-custom main-navbar bg-color main-navbar-color"
        id="main-navbar">
        <div class="container">
            <a class="navbar-brand" href="#" >
            <div class="order-lg-last btn-group">
                <i class="fas fa-utensils "></i> 
            </div>     GUSTY</a>
            <?php if(isset($_SESSION['user']['pseudo'])){ ?>
            <div class="order-lg-last btn-group">
                <i class="fas fa-sign-out-alt fa-2x"></i> 
            </div><?php } ?>
        <div class="collapse navbar-collapse"id="myNav">
            <ul class="navbar-nav ml-auto">

                <?php
if(isset($_SESSION['user']['pseudo']))
   { if($_SESSION['user']['role']=="admin") 
      { ?>
       <li class="nav-item">
            <a href="listeUsers_back.php"class="nav-link">USERS</a>
        </li>
        <li class="nav-item">
            <a href="listePlats_back.php"class="nav-link">DISHES</a>
        </li> 
        <li class="nav-item">
            <a href="afficheReservation.php"class="nav-link">RESERVATIONS</a>
        </li>
        <li class="nav-item">
            <a href="afficherCommande.php"class="nav-link">ORDERS</a>
        </li>
        <li class="nav-item">
            <a href="profil_admin.php"class="nav-link">PROFIL</a>
        </li>
        <li class="nav-item">
            <a href="logout.php"class="nav-link">LOGOUT</a>
        </li>
     <?php } 
      if($_SESSION['user']['role']=="client") { ?>
        <li class="nav-item">
            <a href="home.php"class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
            <a href="menu.php"class="nav-link">MENU</a>
        </li>
        <li class="nav-item">
            <a href="reservation.php"class="nav-link">RESERVATION</a>
        </li>
        <li class="nav-item">
            <a href="shoppingCart.php"class="nav-link">SHOPPING CART</a>
        </li>
        <li class="nav-item">
            <a href="profil.php"class="nav-link">PROFIL</a>
        </li>
        <li class="nav-item">
            <a href="logout.php"class="nav-link">LOGOUT</a>
        </li>
<?php }}
else { ?>
    <li class="nav-item">
        <a href="home.php"class="nav-link">HOME</a>
    </li>
    <li class="nav-item">
        <a href="menu.php"class="nav-link">MENU</a>
    </li>
    <li class="nav-item">
        <a href="shop_account.php"class="nav-link">LOGIN</a>
    </li>
    <li class="nav-item">
        <div class="order-lg-last btn-group">
            <i class="fas fa-user-circle fa-2x"></i> 
        </div>
    </li>
<?php } ?>
    </ul>
        </div>
        </div>
        </nav>
    </section>