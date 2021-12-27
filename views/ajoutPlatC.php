<?php

include "../controller/platC.php"; 

if(isset($_POST['nom'])&& isset($_POST['prix'] )&& isset($_POST['description'])&& isset($_POST['photo']))
{
	$plat=new plat($_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['photo']);
	$platC=new platC();
	$platC->ajouterPlat($plat);
	header('Location:listePlats_back.php');
}
else
{
echo"pas d'informations";
}
?>