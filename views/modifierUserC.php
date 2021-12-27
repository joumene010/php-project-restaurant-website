<?php
    include "../controller/userC.php";
    session_start();
    $userC = new userC();
    $error = "";

    if (isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["password"]))
    {
        $user = new user($_SESSION['user']['pseudo'],$_POST['fullname'],$_POST['password'], $_POST['telephone'],$_POST['email'],"client");
        $userC->modifierUser($user,$_SESSION['user']['pseudo']);
        $_SESSION['user']['fullname']=$_POST['fullname'];
        $_SESSION['user']['password']=$_POST['password'];
        $_SESSION['user']['telephone']=$_POST['telephone'];
        $_SESSION['user']['email']=$_POST['email'];
        header('location:profil.php');
        }
    else
        $error = "Missing information";
    

?>