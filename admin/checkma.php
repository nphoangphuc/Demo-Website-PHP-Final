<html>
	<head>
		<title> Check mã</title>	
	</head>
	<body>
		<form method="post">
		Mã: <input type="text" name="ma" ><br>
		<input type="submit" name="CheckMa" value="Submit" >
		</form>
		<br/>
	</body>
	
	<?php
	include '../show_db_mysql.php';
	
	if(isset($_POST['CheckMa']))
	{
		$sql="SELECT * from admin where MA='".$_POST['ma']."'";
		echo $sql;
		$query=mysqli_query($db,$sql);

		while($row=mysqli_fetch_array($query))
		{
			$mail=$row['EMAIL'];
			session_start();
			$_SESSION['email']=$mail;
		}
		echo "<br> Mail từ check mã: ".$mail."<br>";
		header('Location: changepassword.php');	
	}
	?>
</html>