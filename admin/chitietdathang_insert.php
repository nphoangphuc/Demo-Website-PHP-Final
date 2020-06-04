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
		<div class="row m-1" >
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 divbody">
				<form action="#" method="post" class="form">
					<table class="center">
						<tr>
							<th colspan="2">Thêm Chi Tiết Đặt Hàng</th>
						</tr>
						<tr>
							<td>Số hóa đơn:</td>
							<td><input type="text" name="txtsohoadon" placeholder="Nhập Số Hóa Đơn" required="required" ></td>
						</tr>
						<tr>
							<td>Mã hàng:</td>
							<td><input type="text" name="txtmahang" placeholder="Nhập Mã Hàng" required="required" ></td>
						</tr>
						<tr>
							<td>Giá bán:</td>
							<td><input type="text" name="txtgiaban" placeholder="Nhập Giá Bán" required="required" ></td>
						</tr>
							<td>Số lượng: </td>
							<td><input type="text" name="txtsoluong" placeholder="Nhập Số Lượng" required="required" ></td>
						</tr>
						<tr>
							<td>Mức giảm giá:</td>
							<td><input type="text" name="txtmucgiamgia" placeholder="Nhập Mức Giảm Giá" required="required" ></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO chitietdathang(SOHOADON,MAHANG,GIABAN,SOLUONG,MUCGIAMGIA) VALUES ('".$_POST["txtsohoadon"]."','".$_POST["txtmahang"]."','".$_POST["txtgiaban"]."','".$_POST["txtsoluong"]."','".$_POST["txtmucgiamgia"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							header('Location:chitietdathang_db.php');
						}
						else
						{
						echo"<br> Không thể cập nhật<br>";
						}
					}
				?>
			</div>
			<div class="col-sm-4">
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