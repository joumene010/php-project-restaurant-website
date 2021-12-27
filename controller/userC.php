<?php 
include "../config.php";

require_once "../model/user.php";

class userC extends config{
	function ajouterUser($user){
		$pseudo=$user->getpseudo();
		$fullname=$user->getfullname();
		$password=$user->getpassword();
		$telephone=$user->gettelephone();
		$email=$user->getemail();
		$role=$user->getrole();

		$sql="INSERT INTO `utilisateur` (`pseudo`, `password`, `fullname`, `telephone`, `email`, `role`) VALUES ('$pseudo', '$password', '$fullname', '$telephone', '$email', '$role');";
        
        $result = $this->getConnexion()->query($sql);

	}

	function modifierUser($user,$pseudo){

		$fullname=$user->getfullname();
		$password=$user->getpassword();
		$telephone=$user->gettelephone();
		$email=$user->getemail();

		$sql="UPDATE `utilisateur` SET 
		        fullname='$fullname',
		        password='$password',
		        telephone='$telephone',
		        email='$email'
		       WHERE pseudo='$pseudo'; ";
	    try{
        	$result=$this->getConnexion()->query($sql);
        }
        catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function afficherUser(){
		$sql="SELECT * FROM `utilisateur`;";
		try {
			$result=$this->getConnexion()->query($sql);
			return $result;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
   }
	
	function recupererUser($pseudo,$password){
			$sql="SELECT pseudo, password, fullname,telephone,email,role,COUNT(*) as nb
			from `utilisateur` WHERE (pseudo='$pseudo' OR email='$pseudo') AND password='$password';";
			try{
			    $result =$this->getConnexion()->query($sql);
			    if($result->num_rows>0){
			    	while($row=$result->fetch_assoc()){
			    		return $row;
			}
		}
	}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	function recupererUser1($pseudo,$email){
		$sql="SELECT pseudo, password, fullname,telephone,email,role,COUNT(*) as nb
			from `utilisateur` WHERE pseudo='$pseudo' OR email='$email';";
		try{
			$result =$this->getConnexion()->query($sql);
			if($result->num_rows>0){
			    while($row=$result->fetch_assoc()){
			    	return $row;
			}
		}
	}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
			}
		}
}

?>