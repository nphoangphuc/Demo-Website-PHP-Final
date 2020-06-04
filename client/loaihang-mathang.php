<html lang="en"	>
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
			<div class="row divbody" style="width:100%" >
				<table border="1" class="center">
				<tr>
					<th>
						<label>Mã hàng</label>
					</th>
					<th>
						<label>Tên Hàng</label>
					</th>
					<th>
						<label>Mã Công Ty</label>
					</th>
					<th>
						<label>Mã Loại Hàng</label>
					</th>
					<th>
						<label>Số Lượng</label>
					</th>
					<th>
						<label>Đơn Vị Tính</label>
					</th>
					<th>
						<label>Giá Hàng</label>
					</th>
					<th>
						<label>Hình</label>
					</th>
				</tr>
				
				<?php
					$SQL="SELECT * from mathang where MAHANG='".$_GET["id"]."'";
					$result=mysqli_query($db,$SQL);
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr>";
							echo '<td>'.$row['MAHANG'].'</td>';
							echo '<td>'.$row['TENHANG'].'</td>';
							echo '<td>'.$row['MACONGTY'].'</td>';
							echo '<td>'.$row['MALOAIHANG'].'</td>';
							echo '<td>'.$row['SOLUONG'].'</td>';
							echo '<td>'.$row['DONVITINH'].'</td>';
							echo '<td>'.$row['GIAHANG'].'</td>';
							echo "<td><img src='".$row['HINH']."' width=100 height=100/></td>";
						echo "</tr>";
					}
				?>
				</table>
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
