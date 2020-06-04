<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<title> Website Bán Hàng </title>
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
				<table border="1" class="center">
					<tr><h1>CHI TIẾT ĐẶT HÀNG CHO SỐ HÓA ĐƠN: <?php echo $_GET["id"]; ?></h1></tr>
						<tr>
						<th>
							<label>Mã hàng</label>
						</th>
						<th>
							<label>Giá bán</label>
						</th>
						<th>
							<label>Sô lượng</label>
						</th>
						<th>
							<label>Mức giảm giá</label>
						</th>
					</tr>
					<?php
						$SQL="SELECT * from chitietdathang where SOHOADON=".$_GET["id"];
						$result=mysqli_query($db,$SQL);
						while($row=mysqli_fetch_array($result))
						{
							echo "<tr>";
								echo '<td>'.$row['MAHANG'].'</td>';
								echo '<td>'.$row['GIABAN'].'</td>';
								echo '<td>'.$row['SOLUONG'].'</td>';
								echo '<td>'.$row['MUCGIAMGIA'].'</td>';
							echo "</tr>";
						}	
					?>
				</table>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12 m-1 sticky-bottom divfooter">
				<?php
				include 'footer.php';
				?>
			<div>
		</div>
	</div>
</body>