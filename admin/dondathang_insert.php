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
							<th colspan="2">Thêm Đơn Đặt Hàng</th>
						</tr>
						<tr>
							<td>Số hóa đơn:</td>
							<td><input type="text" name="txtsohoadon" placeholder="Nhập Số Hóa Đơn" required="required" ></td>
						</tr>
						<tr>
							<td>Mã khách hàng:</td>
							<td> <input type="text" name="txtmakhachhang" placeholder="Nhập Mã Hàng" required="required"></td>
						</tr>
						<tr>
							<td>Mã nhân viên:</td>
							<td><input type="text" name="txtmanhanvien" placeholder="Nhập Mã Nhân Viên"></td>
						</tr>
							<td>Ngày đặt hàng: </td>
							<td><input type="date" name="txtngaydathang" placeholder="Nhập Ngày Đặt Hàng"></td>
						</tr>
						<tr>
							<td>Ngày giao hàng:</td>
							<td><input type="date" name="txtngaygiaohang" placeholder="Nhập Ngày Giao Hàng"></td>
						</tr>
						<tr>
							<td>Ngày chuyển hàng:</td>
							<td><input type="date" name="txtngaychuyenhang" placeholder="Nhập Ngày Chuyển Hàng"></td>
						</tr>
						<tr>
							<td>Nơi giao hàng:</td>
							<td><input type="text" name="txtnoigiaohang" placeholder="Nhập Nơi Giao Hàng"></td>
						</tr>
						<tr>
							<td>Trạng thái đơn hàng:</td>
							<td><input type="text" name="txttrangthaidonhang" placeholder="Nhập Trạng Thái Đơn Hàng"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO dondathang(SOHOADON,MAKHACHHANG,MANHANVIEN,NGAYDATHANG,NGAYGIAOHANG,NGAYCHUYENHANG,NOIGIAOHANG,TRANGTHAIDONHANG) VALUES ('".$x."','".$_POST["txtmakhachhang"]."','".$_POST["txtmanhanvien"]."','".$_POST["txtngaydathang"]."','".$_POST["txtngaygiaohang"]."','".$_POST["txtngaychuyenhang"]."','".$_POST["txtnoigiaohang"]."','".$_POST["txttrangthaidonhang"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							//header('Location:thanhtoan.php');
							include('thanhtoan.php');
						}
						else
						{
							echo"<br> Không thể cập nhật đơn đặt hàng<br>";
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
</body>