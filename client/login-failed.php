<html>
	<head>
	</head>
	<body>
		<?php
		alert("Wrong User/Password");

		function alert($msg) {
			echo "<script type='text/javascript'>alert('$msg');</script>";
		}
		
		include ('login.php');
		?>
	</body>
</html>