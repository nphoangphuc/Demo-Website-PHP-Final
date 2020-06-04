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
				<table border="1" class="center">
					<tr><h1>ĐƠN ĐẶT HÀNG</h1></tr>
					<tr>
						<th>
							<label>Số hóa đơn</label>
						</th>
						<th>
							<label>Mã khách hàng:</label>
						</th>
						<th>
							<label>Mã nhân viên</label>
						</th>
						<th>
							<label>Ngày đặt hàng</label>
						</th>
						<th>
							<label>Ngày giao hàng</label>
						</th>
						<th>
							<label>Ngày chuyển hàng</label>
						</th>
						<th>
							<label>Nơi giao hàng</label>
						</th>
						<th>
							<label>Trạng Thái Đơn Hàng</label>
						</th>
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from dondathang");

						while($row=mysqli_fetch_array($select))
						{
							echo "<tr>";
								echo "<td><a href='./dondathang-chitietdathang.php?id=".$row['SOHOADON']."'>".$row['SOHOADON']."</a></td>";
								echo '<td>'.$row['MAKHACHHANG'].'</td>';
								echo '<td>'.$row['MANHANVIEN'].'</td>';
								echo '<td>'.$row['NGAYDATHANG'].'</td>';
								echo '<td>'.$row['NGAYGIAOHANG'].'</td>';
								echo '<td>'.$row['NGAYCHUYENHANG'].'</td>';
								echo '<td>'.$row['NOIGIAOHANG'].'</td>';
								echo '<td>'.$row['TRANGTHAIDONHANG'].'</td>';
								echo "<td><a href='./dondathang_update.php?id1=".$row['SOHOADON']."&id2=".$row['MAKHACHHANG']."&id3=".$row['MANHANVIEN']."'> Sửa</a></td>";
								echo "<td><a href='./dondathang_delete.php?id1=".$row['SOHOADON']."'> Xóa</a></td>";
							echo "</tr>";
						}	
					?>
					<tr>
						<td colspan=9 align="center">
							<form action="dondathang_insert.php" method="post" class="form">
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