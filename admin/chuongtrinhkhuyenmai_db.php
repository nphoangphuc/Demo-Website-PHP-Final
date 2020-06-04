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
						<th></th>
						<th></th>
						<th></th>
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
							echo "<td><a href='./chuongtrinhkhuyenmai_update.php?id=".$row['MACHUONGTRINH']."'> Sửa</a></td>";
							echo "<td><a href='./chuongtrinhkhuyenmai_delete.php?id=".$row['MACHUONGTRINH']."'> Xóa</a></td>";
							echo "<td><a href='./sentpromotion.php?id=".$row['MACHUONGTRINH']."'> Gửi chương trình cho khách hàng</a></td>";
						echo "</tr>";
					}
				?>
					<tr>
						<td colspan=8 align="center">
							<form action="chuongtrinhkhuyenmai_insert.php" method="post" class="form">
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