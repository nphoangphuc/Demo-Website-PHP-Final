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
					<tr><h1>LOẠI HÀNG</h1></tr>
					<tr>
						<th>
							<label>Mã Loại hàng</label>
						</th>
						<th>
							<label>Tên Loại hàng</label>
						</th>
						<th>
							<label>Hình</label>
						</th>
						<th></th>
						<th></th>
					</tr>
					<?php
						$select=mysqli_query($db,"SELECT * from loaihang");
						while($row=mysqli_fetch_array($select))
						{
							echo "<tr>";
								echo "<td><a href='./sanpham.php?id=".$row['MALOAIHANG']."'>".$row['MALOAIHANG']."</a></td>";
								echo '<td>'.$row['TENLOAIHANG'].'</td>';
								echo "<td><img src='".$row['HINH']."' width=100 height=100/></td>";
								echo "<td><a href='./loaihang_update.php?id=".$row['MALOAIHANG']."'> Sửa</a></td>";
								echo "<td><a href='./loaihang_delete.php?id=".$row['MALOAIHANG']."'> Xóa</a></td>";
							echo "</tr>";
						}
					?>
					<tr>
						<td colspan=7 align="center">
							<form action="loaihang_insert.php" method="post" class="form">
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