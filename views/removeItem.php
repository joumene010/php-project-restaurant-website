
<?php
session_start();
if(isset($_POST["remove"])){  
     if(isset($_POST["id"])){
                $id = $_POST["id"] ;
                unset($_SESSION["cart"]["items"][$id]);  
                header('Location:shoppingCart.php'); 
        }  
                
         
    }  
?>