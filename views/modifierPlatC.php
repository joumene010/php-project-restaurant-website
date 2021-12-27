<?php
    include "../controller/platC.php";
    session_start();
    $platC = new platC();
    $error = "";

    if (isset($_POST["nom"]) && isset($_POST["prix"]) && isset($_POST["description"]))
    {
        if(empty($_POST['photo']))
        {
        $plat = new plat($_POST['nom'],$_POST['prix'], $_POST['description'],$_SESSION['photo_prec']);
        $platC->modifierPlat($plat,$_POST['id']);
        header('location:listePlats_back.php');
        }
        if(!empty($_POST['photo']))
        {
        $plat = new plat($_POST['nom'],$_POST['prix'], $_POST['description'],$_POST['photo']);
        $platC->modifierPlat($plat,$_POST['id']);
        header('location:listePlats_back.php');
        }
    }
    else
        $error = "Missing information";
    

?>