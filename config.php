<?php

class config 
{
  private $servername ;
  private $username ;
  private $password ;
  private $database ;

  protected function getConnexion() 
  {
     $this->servername = 'localhost';
     $this->username = 'root';
     $this->password = '';
     $this->database='restaurant';
            
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
            
          return $conn;

      if($conn->connect_error){
        
            die('Erreur : ' .$conn->connect_error);
        
        }
            echo 'Connexion réussie';
  }
}

?>