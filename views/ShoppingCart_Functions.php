<?php 
/*Add an item*/
function add_item(){

if(isset($_POST['submit1']))
{  extract($_POST);

    
          if (!(isset($_SESSION['cart']['items'][$id]))){                  
        
                $_SESSION['cart']['items'][$id] = 1;
                
          } 
}
}
/* Change the quantity of an items in the shop card */
function change_quantity(){

    if(isset($_POST['quan'])){  

        $id= $_POST['id'];
        $quan = $_POST['quan'];
    
        if($quan > 0){
               $_SESSION['cart']['items'][$id] = $quan;
         }  
    
        elseif($quan == 0) {
                unset($_SESSION["cart"]['items'][$id]);  
                echo '<script>window.location="ShoppingCart.php"</script>'; 
         }
    } 
}


?>