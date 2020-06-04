<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<title> Quản lý Website </title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 m-1 divhead">
				<?php
				include 'Menu-admin.php';
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 m-1 divbody">
				<table border="1" align="center">
					<tr><h1>CHI TIẾT ĐẶT HÀNG</h1></tr>
					<tr>
						<th>
							<label>Số hóa đơn</label>
						</th>
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
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from chitietdathang");

						while($row=mysqli_fetch_array($select))
						{
							echo "<tr>";
								echo '<td>'.$row['SOHOADON'].'</td>';
								echo '<td>'.$row['MAHANG'].'</td>';
								echo '<td>'.$row['GIABAN'].'</td>';
								echo '<td>'.$row['SOLUONG'].'</td>';
								echo '<td>'.$row['MUCGIAMGIA'].'</td>';
								echo "<td><a href='./chitietdathang_update.php?id1=".$row['SOHOADON']."&id2=".$row['MAHANG']."'> Sửa</a></td>";
								echo "<td><a href='./chitietdathang_delete.php?id1=".$row['SOHOADON']."&id2=".$row['MAHANG']."'> Xóa</a></td>";
							echo "</tr>";
						}
					?>
					<tr>
						<td colspan=7 align="center">
							<form action="chitietdathang_insert.php" method="post" class="form">
								<input type="submit" name="Add" value="Add">
							</form>	
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 m-1 sticky-bottom divfooter">
				<?php
				include 'footer-admin.php';
				?>
			<div>
		</div>
	</div>
</body>