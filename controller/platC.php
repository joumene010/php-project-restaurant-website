<?php

include "../config.php";
require_once "../model/plat.php";

class platC extends config {
	function ajouterPlat($plat){
		$nom=$plat->getnom();
		$prix=$plat->getprix();
		$description=$plat->getdescription();
		$photo=$plat->getphoto();

		$sql="INSERT INTO `plat` (`id`, `nom`, `prix`, `description`, `photo`) VALUES (NULL, '$nom', '$prix', '$description', '$photo');";

		$result=$this->getConnexion()->query($sql);
	}

	function afficherPlat(){
		$sql="SELECT * FROM `plat`;";
		try {
			$result=$this->getConnexion()->query($sql);
			return $result;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
   }
   

   function supprimerPlat($id){
   	$sql="DELETE FROM `plat` WHERE id=$id ;";
   	try{
   		$result=$this->getConnexion()->query($sql);

   	}
   	catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
   	}

    function modifierPlat($plat,$id){
    	$nom=$plat->getnom();
		$prix=$plat->getprix();
		$description=$plat->getdescription();
		$photo=$plat->getphoto();

		$sql="UPDATE `plat` SET 
		        nom='$nom',
		        prix=$prix,
		        description='$description',
		        photo='$photo'
		       WHERE id=$id; ";
        try{
        	$result=$this->getConnexion()->query($sql);
        }
        catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}

    }

}

?>