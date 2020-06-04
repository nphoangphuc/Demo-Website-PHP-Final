<html>
	<head>
		<title> Đổi mật khẩu</title>	
	</head>
	<body>
		<form method="post">
		Password: <input type="password" name="pass" ><br>
		Repeat Password: <input type="password" name="passrepeat"><br>	
		<input type="submit" name="ChangePass" value="Change Password" >
		</form>
		<br/>
	</body>
	
	<?php
	session_start();
	$mail=$_SESSION['email'];
	echo $mail;
	
	if(isset($_POST['ChangePass']))
	{
		if($_POST['pass']==$_POST['passrepeat'])
		{
			include '../show_db_mysql.php';
			$p=md5($_POST['pass']);
			$sql_change="UPDATE admin SET PASSWORD='".$p."' where EMAIL='".$mail."'";
			echo $sql_change;
			$query=mysqli_query($db,$sql_change);
			if(mysqli_affected_rows($db)==0)
			{
				echo 'Mật khẩu không được trùng với mật khẩu cũ';
			}
			else
			{
				header("Location:login-admin.php");
			}				
		}
		else
		{
		echo 'Mật khẩu không trùng nhau';	
		}
	}
	?>
</html>