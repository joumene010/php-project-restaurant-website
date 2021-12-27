<?php

include "../controller/userC.php"; 

if(isset($_POST['pseudo'])&& isset($_POST['password']))
{    
	$userC=new userC();
	$liste=$userC->recupererUser($_POST['pseudo'],$_POST['password']);
	if(empty($liste['pseudo'])){
		header('Location:shop_account.php');
	}
	if(isset($liste['pseudo'])) {
	session_start();
	$_SESSION['user']['pseudo']=$liste['pseudo'];
	$_SESSION['user']['fullname']=$liste['fullname'];
	$_SESSION['user']['password']=$liste['password'];
	$_SESSION['user']['telephone']=$liste['telephone'];
	$_SESSION['user']['email']=$liste['email'];
	$_SESSION['user']['role']=$liste['role'];
	if($_SESSION['user']['role']=="client"){
	header('Location:home.php');}
	else{
		header('Location:listeUsers_back.php');}
	}
}
else
{
echo"pas d'informations";
}
?>
