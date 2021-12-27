<?php
    function ajoutReservation($dbc,$pseudo){
        extract($_POST);
        $sql="SELECT * FROM `reservation`  WHERE `date_reservation`='$date' and `heure_arrive`='$time'";
        $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
        $row = mysqli_fetch_assoc($result);
        if(isset($row)){
        $v = 0;
        }
        else{
        $sql = "SELECT MAX(`id`) as 'n' FROM `reservation`  ";
        $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
        $row = mysqli_fetch_assoc($result);
        $reservation_id = $row['n'] +1;
        $sql="INSERT INTO `reservation`(`id`, `date_reservation`, `heure_arrive`, `nombre_perso`, `pseudo`) 
        VALUES ($reservation_id,'$date','$time','$people','$pseudo')";
        $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
        $v = 1 ;
       
        }
         return $v;
       
    }

    function annulerReservation($dbc){
        extract($_POST);
        $sql="DELETE FROM `reservation` WHERE `date_reservation`='$date' and `heure_arrive`='$time';";
        $result = mysqli_query($dbc,$sql) or die("bad query: $sql");
        print($sql);

    }

    function afficherReservation($dbc){
		$sql="SELECT * FROM `reservation`";
		try {
			$result = mysqli_query($dbc,$sql) or die("bad query: $sql");  
			return $result;
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}

    }


    
    function supprimerReservation($dbc,$id){
    $sql="DELETE FROM `reservation` WHERE id=$id ";
    try{
        $result = mysqli_query($dbc,$sql) or die("bad query: $sql");

    }
    catch(Exception $e){
         die('Erreur: '.$e->getMessage());
     }

   
    }

?>