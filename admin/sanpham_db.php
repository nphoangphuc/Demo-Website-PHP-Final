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
					<tr><h1>SẢN PHẨM</h1></tr>
					<tr>
						<th>
							<label>Mã Sản Phẩm</label>
						</th>
						<th>
							<label>Tên Sản Phẩm</label>
						</th>
						<th>
							<label>Giá</label>
						</th>
						<th>
							<label>Mô Tả</label>
						</th>
						<th></th>
						<th></th>
					</tr>
					<?php
					$select=mysqli_query($db,"SELECT * from sanpham");

					while($row=mysqli_fetch_array($select))
					{
						echo "<tr>";
							echo '<td>'.$row['masp'].'</td>';
							echo '<td>'.$row['tensanpham'].'</td>';
							echo '<td>'.$row['gia'].'</td>';
							echo '<td>'.$row['mota'].'</td>';
							echo "<td><a href='./sanpham_update.php?id=".$row['masp']."'> Sửa</a></td>";
							echo "<td><a href='./sanpham_delete.php?id=".$row['masp']."'> Xóa</a></td>";
						echo "</tr>";
					}
				?>
					<tr>
						<td colspan=6 align="center">
							<form action="sanpham_insert.php" method="post" class="form">
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