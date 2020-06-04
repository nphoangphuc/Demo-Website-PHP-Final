<html lang="en"	>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<title>Website Bán Hàng </title>
		<script type="text/javascript">
		$(window).on('load',function(){
			$('#myModal').modal('show');
		});
		</script>
	</head>
	<body>
		<div class="container-fluid">	
			<div class="row">
				<div class="col-sm-12 m-1 divhead">
					<?php
					include 'Menu.php';
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 m-1 divbody">
				<?php
				if(isset($_SESSION["name"]) && $_SESSION["name"] == true)	  
				{
					include'themdondathang.php';
				}
				else
				{
					include'modal.php';
				}
				?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 m-1 sticky-bottom divfooter">
					<?php
					include 'footer.php';
					?>
				</div>	
			</div>
		</div>
	</body>
</html>