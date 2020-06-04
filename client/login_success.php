<?php
		$u='';
		if(isset($SESSION["name"]) && isset($SESSION["name"]) !='')
		{
			header('Location:login.php');
		}
		else
		{
			echo "Welcome.".$_SESSION["name"]."!<br>";	
		}	
?>