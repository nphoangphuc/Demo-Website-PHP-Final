<html lang="en"	>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery-3.4.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<title>Website Bán Hàng </title>
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
			<div class="row" >
				<div class="col-sm-12 m-1 divbody">
					<h1 style="font-size:400%;">ĐÂY LÀ TRANG MUA HÀNG</h1>
					<table border="1" align="center">
					<tr><h1>CHƯƠNG TRÌNH KHUYẾN MÃI</h1></tr>
					<tr>
						<th>
							<label>MÃ CHƯƠNG TRÌNH</label>
						</th>
						<th>
							<label>TÊN CHƯƠNG TRÌNH</label>
						</th>
						<th>
							<label>NỘI DUNG</label>
						</th>
						<th>
							<label>NGÀY BẮT ĐẦU</label>
						</th>
						<th>
							<label>NGÀY KẾT THÚC</label>
						</th>
						
					</tr>
					<?php
					$select=mysqli_query($db,"SELECT * from chuongtrinhkhuyenmai");

					while($row=mysqli_fetch_array($select))
					{
						echo "<tr>";
							echo '<td>'.$row['MACHUONGTRINH'].'</td>';
							echo '<td>'.$row['TENCHUONGTRINH'].'</td>';
							echo '<td>'.$row['NOIDUNG'].'</td>';
							echo '<td>'.$row['THOIGIANBATDAU'].'</td>';
							echo '<td>'.$row['THOIGIANKETTHUC'].'</td>';
							
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
</html>