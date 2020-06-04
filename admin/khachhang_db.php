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
					<tr><h1>KHÁCH HÀNG</h1></tr>
					<th>
						<label>Mã khách hàng</label>
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
					<th>
						<label>User</label>
					</th>
					<th>
						<label>Pass</label>
					</th>
					
					<th></th>
					<th></th>
					<?php
						$select=mysqli_query($db,"SELECT * from khachhang");

						while($row=mysqli_fetch_array($select))
						{
							echo "<tr>";
								echo '<td>'.$row['MAKHACHHANG'].'</td>';
								echo '<td>'.$row['TENCONGTY'].'</td>';
								echo '<td>'.$row['TENGIAODICH'].'</td>';
								echo '<td>'.$row['DIACHI'].'</td>';
								echo '<td>'.$row['EMAIL'].'</td>';
								echo '<td>'.$row['DIENTHOAI'].'</td>';
								echo '<td>'.$row['FAX'].'</td>';
								echo '<td>'.$row['USER'].'</td>';
								echo '<td>'.$row['PASS'].'</td>';
								echo "<td><a href='./khachhang_update.php?id=".$row['MAKHACHHANG']."'> Sửa</a></td>";
								echo "<td><a href='./khachhang_delete.php?id=".$row['MAKHACHHANG']."'> Xóa</a></td>";
							echo "</tr>";
						}
					?>
					<tr>
						<td colspan=9 align="center">
							<form action="khachhang_insert.php" method="post" class="form">
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
				
				
		
	</div>
</body>