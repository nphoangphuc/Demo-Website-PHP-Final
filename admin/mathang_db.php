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
					<tr><h1>MẶT HÀNG</h1></tr>
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
						
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from mathang");
						while($row=mysqli_fetch_array($select))
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
								echo "<td><a href='./mathang_update.php?id=".$row['MAHANG']."'> Sửa</a></td>";
								echo "<td><a href='./mathang_delete.php?id=".$row['MAHANG']."'> Xóa</a></td>";
							echo "</tr>";
						}
					?>
					<tr>
						<td colspan=9 align="center">
							<form action="mathang_insert.php" method="post" class="form">
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