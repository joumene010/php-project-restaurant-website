<?PHP
	include "../controller/platC.php";

	$platC=new platC();
	
	if (isset($_POST["id"])){
		$platC->supprimerPlat($_POST["id"]);
		header('Location:listePlats_back.php');
	}

?>