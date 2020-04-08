 <?php

ob_start();
session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];


$uid="pei";
$upwd="1234";

if($uid==$id && $upwd==$pwd)
{
	$_SESSION["login"]="success";
	$_SESSION["ID"]=$id;
	echo "login success";
	header('Location:catalog.php');

}
else
{
	$_SESSION["login"]="fail";
	header('Location:login.php');
	
}

?>