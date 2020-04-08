<!DOCTYPE html>
<html>
<head>
	<title>商品目錄</title>

 <?php  
   session_start();
		if(isset($_POST["Item"])){
			$_SESSION["Number"] = $_POST["Number"];
			$id = $_POST["Item"];
			$_SESSION["ID"] = $id;
			switch (strtoupper($id)) {
				case "a":
					$_SESSION["Name"]="珍奶";
					$_SESSION["Price"]="60";
					break;
				case "b":
					$_SESSION["Name"]="伯爵紅茶";
					$_SESSION["Price"]="30";
					break;
				case "c":
					$_SESSION["Name"]="四季春";
					$_SESSION["Price"]="30";
					break;
			}
			header("Location:addcart.php");
		}
	?>



</head>
<body>
	<h2><b>商品目錄</b></h2>
	<form action="catalog.php" method="POST">
	選擇您要的商品：<select name="Item">
			 	<option value="a">珍奶 $60/杯</option>
			 	<option value="b">伯爵紅茶 $30/杯</option>
			 	<option value="c">四季春 $30/杯</option>
		     </select> &nbsp;
	<input type="text" size="10" name="Number" value="1"></br></br>
	<input type="submit" value="訂購">
	</form></br>
	<a href="cart.php">檢視您的購物車</a>
</body>
</html>


