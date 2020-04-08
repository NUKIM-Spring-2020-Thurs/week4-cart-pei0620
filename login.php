	<h1>使用者登入</h1>
	<?php 

	if(isset($_COOKIE["ID"]))
	{
		$user=$_COOKIE["ID"];
		echo "歡迎再度光臨".$_COOKIE["ID"];
		setcookie("ID","",time()-3600);
	}
	else
	{
		echo "歡迎新朋友";
		$user="";
	}

	 ?>
	 <form action="check.php" method="post">
	帳號:<input type="text" name="id" value="<?php echo $_COOKIE["ID"]; ?>" required></br>
    密碼:<input type="password" name="pwd" required></br>
    <br><input type="submit" name="">
</form>