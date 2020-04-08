<?php 

if ( isset($_SESSION["ID"]) ) {
   $id = $_SESSION["ID"];
   $name = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   $number = $_SESSION["Number"];  
   setcookie($id."[ID]", $id, time()-3600);
   setcookie($id."[Name]", $name, time()-3600);
   setcookie($id."[Price]", $price, time()-3600);
   setcookie($id."[Number]", $number, time()-3600);
}
   header("Location:cart.php");
   


?>