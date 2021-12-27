<?php 
function conn(){
$dbc = mysqli_connect('localhost','root','','restaurant'); 
return $dbc;
if($dbc->connect_error){
        
  die('Erreur : ' .$dbc->connect_error); 
    
}
  echo 'Connexion réussie';
  
}

?>

