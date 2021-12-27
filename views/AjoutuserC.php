<?php
include "../controller/userC.php"; 

if(isset($_POST['pseudo'])&& isset($_POST['fullname'] )&& isset($_POST['password'])&& isset($_POST['telephone'])
	&& isset($_POST['email']))
{
	$user=new user($_POST['pseudo'],$_POST['fullname'],$_POST['password'],$_POST['telephone'],$_POST['email'],"client");
	$userC=new userC();
	$liste=$userC->recupererUser1($_POST['pseudo'],$_POST['email']);
	if(isset($liste['pseudo']))
	{
		echo '<script> alert("Costumer already exist");
		window.location.assign("shop_account.php") </script>';
	}
	if(!isset($liste['pseudo']))
	{
	$userC->ajouterUser($user);
	session_start();
	$_SESSION['user']['pseudo']=$_POST['pseudo'];
	$_SESSION['user']['fullname']=$_POST['fullname'];
	$_SESSION['user']['password']=$_POST['password'];
	$_SESSION['user']['telephone']=$_POST['telephone'];
	$_SESSION['user']['email']=$_POST['email'];
	$_SESSION['user']['role']="client" ;
	header('Location:home.php');
}
}
else
{
echo"pas d'informations";
}
?>