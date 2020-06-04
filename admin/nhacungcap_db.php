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
					<tr><h1>NHÀ CUNG CẤP</h1></tr>
					<tr>
						<th>
							<label>Mã Công Ty</label>
						</th>
						<th>
							<label>Tên Công Ty</label>
						</th>
						<th>
							<label>Tên giao dịch</label>
						</th>
						<th>
							<label>Địa chỉ</label>
						</th>
						<th>
							<label>Email</label>
						</th>
						<th>
							<label>Điện Thoại</label>
						</th>
						<th>
							<label>Fax</label>
						</th>
						
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from chitietdathang");

						while($row=mysqli_fetch_array($select))
						{
							$select=mysqli_query($db,"SELECT * from nhacungcap");
							while($row=mysqli_fetch_array($select))
							{
								echo "<tr>";
									echo '<td>'.$row['MACONGTY'].'</td>';
									echo '<td>'.$row['TENCONGTY'].'</td>';
									echo '<td>'.$row['TENGIAODICH'].'</td>';
									echo '<td>'.$row['DIACHI'].'</td>';
									echo '<td>'.$row['EMAIL'].'</td>';
									echo '<td>'.$row['DIENTHOAI'].'</td>';
									echo '<td>'.$row['FAX'].'</td>';
									echo "<td><a href='./nhacungcap_update.php?id=".$row['MACONGTY']."'> Sửa</a></td>";
									echo "<td><a href='./nhacungcap_delete.php?id=".$row['MACONGTY']."'> Xóa</a></td>";
								echo "</tr>";
							}
						}
					?>
					<tr>
						<td colspan=9 align="center">
							<form action="nhacungcap_insert.php" method="post" class="form">
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