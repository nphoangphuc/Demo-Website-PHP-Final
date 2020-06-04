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
							<th colspan="2">Thêm Sản Phẩm</th>
						</tr>
						<tr>
							<td>Mã Sản Phẩm: </td>
							<td><input type="text" name="txtmasanpham" placeholder="Nhập Mã Sản Phẩm" required="required" ></td>
						</tr>
						<tr>
							<td>Tên Sản Phẩm: </td>
							<td><input type="text" name="txttensanpham" placeholder="Nhập Tên Sản Phẩm" ></td>
						</tr>
						<tr>
							<td>Giá:</td>
							<td><input type="text" name="txtgia" placeholder="Nhập Giá" ></td>
						</tr>
							<td>Mô Tả: </td>
							<td><input type="text" name="txtmota" placeholder="Nhập Mô Tả"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO sanpham(masp,tensanpham,gia,mota) VALUES ('".$_POST["txtmasanpham"]."','".$_POST["txttensanpham"]."','".$_POST["txtgia"]."','".$_POST["txtmota"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							header('Location:sanpham_db.php');
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