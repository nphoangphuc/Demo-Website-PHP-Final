<head>
	<meta charset="utf-8"/>
</head>
<body>
	<table border="1">
		<?php
			$server="127.0.0.1";
			$user_name="root";
			$password="";
			$database="donhang";
			
			$db=mysqli_connect($server,$user_name,$password,$database);
			$db->set_charset("utf8");
			
			$currency			= 'VNĐ'; //currency symbol
			$shipping_cost		= 1.50; //shipping cost
			$taxes				= array( //List your Taxes percent here.
							'VAT' => 12, 
							'Service Tax' => 5,
							'Other Tax' => 10
							);
		?>
	</table>
</body>