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
					<tr><h1>NHÂN VIÊN</h1></tr>
					<tr>
						<th>
						<label>Mã Nhân Viên</label>
						</th>
						<th>
							<label>Họ</label>
						</th>
						<th>
							<label>Tên</label>
						</th>
						<th>
							<label>Ngày Sinh</label>
						</th>
						<th>
							<label>Ngày Làm Việc</label>
						</th>
						<th>
							<label>Địa chỉ</label>
						</th>
						<th>
							<label>Điện Thoại</label>
						</th>
						<th>
							<label>Lương Cơ Bản</label>
						</th>
						<th>
							<label>Phụ Cấp</label>
						</th>
						
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from chitietdathang");

						while($row=mysqli_fetch_array($select))
						{
							$select=mysqli_query($db,"SELECT * from nhanvien");

							while($row=mysqli_fetch_array($select))
							{
								echo "<tr>";
									//echo "<td><a href='./mathang_filter.php?id=".$row['MALOAIHANG']."'>".$row['MALOAIHANG']."</a></td>";
									echo '<td>'.$row['MANHANVIEN'].'</td>';
									echo '<td>'.$row['HO'].'</td>';
									echo '<td>'.$row['TEN'].'</td>';
									echo '<td>'.$row['NGAYSINH'].'</td>';
									echo '<td>'.$row['NGAYLAMVIEC'].'</td>';
									echo '<td>'.$row['DIACHI'].'</td>';
									echo '<td>'.$row['DIENTHOAI'].'</td>';
									echo '<td>'.$row['LUONGCOBAN'].'</td>';
									echo '<td>'.$row['PHUCAP'].'</td>';
									echo "<td><a href='./nhanvien_update.php?id=".$row['MANHANVIEN']."'> Sửa</a></td>";
									echo "<td><a href='./nhanvien_delete.php?id=".$row['MANHANVIEN']."'> Xóa</a></td>";
								echo "</tr>";
							}
						}
					?>
					<tr>
						<td colspan=11 align="center">
							<form action="nhanvien_insert.php" method="post" class="form">
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