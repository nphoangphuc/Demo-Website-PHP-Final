<?php
	session_start();
	unset($_SESSION["name"]);
	session_destroy();
	
?>
<html>
	<head>
	</head>
	<body>
		<?php
		alert("Logout Successful");

		function alert($msg) {
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
		
		include ('login-admin.php');
		?>
	</body>
</html>
