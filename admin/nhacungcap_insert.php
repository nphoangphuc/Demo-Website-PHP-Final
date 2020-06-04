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
							<th colspan="2">Thêm Nhà Cung Cấp</th>
						</tr>
						<tr>
							<td>Mã Công Ty: </td>
							<td><input type="text" name="txtmacongty" placeholder="Nhập Mã Công Ty" required="required" ></td>
						</tr>
						<tr>
							<td>Tên công ty: </td>
							<td><input type="text" name="txttencongty" placeholder="Nhập Tên Công Ty" ></td>
						</tr>
						<tr>
							<td>Tên giao dịch: </td>
							<td><input type="text" name="txttengiaodich" placeholder="Nhập Tên Giao Dịch" ></td>
						</tr>
							<td>Địa chỉ: </td>
							<td><input type="text" name="txtdiachi" placeholder="Nhập Địa Chỉ"></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><input type="email" name="txtemail" placeholder="Nhập Email" ></td>
						</tr>
						<tr>
							<td>Điện thoại: </td>
							<td><input type="number" name="txtdienthoai" placeholder="Nhập Điện Thoại" ></td>
						</tr>
						<tr>
							<td>Fax: </td>
							<td><input type="text" name="txtfax" placeholder="Nhập Số Fax" ></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO nhacungcap(MACONGTY,TENCONGTY,TENGIAODICH,DIACHI,EMAIL,DIENTHOAI,FAX) VALUES ('".$_POST["txtmacongty"]."','".$_POST["txttencongty"]."','".$_POST["txttengiaodich"]."','".$_POST["txtdiachi"]."','".$_POST["txtemail"]."','".$_POST["txtdienthoai"]."','".$_POST["txtfax"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							header('Location:nhacungcap_db.php');
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