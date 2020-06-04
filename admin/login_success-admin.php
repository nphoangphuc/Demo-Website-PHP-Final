<?php
		$u='';
		session_start();
		if(isset($SESSION["name"]) && isset($SESSION["name"]) !='')
		{
			header('Location:login.php');
		}
		else
		{
			echo "Welcome.".$_SESSION["name"]."!<br>";	
			//luu vao csdl
			//luu bang dondathang và bảng chitietdathang
		}
		
		
?>