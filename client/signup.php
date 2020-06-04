<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<title> Website Bán Hàng </title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 m-1 divhead">
				<?php
				
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
							<th colspan="2">Đăng ký thành viên</th>
						</tr>
						<tr>
							<td>Mã khách hàng: </td>
							<td><input type="text" name="txtmakhachhang" placeholder="Nhập Mã Khách Hàng" required="required" ></td>
						</tr>
						<tr>
							<td>Tên công ty: </td>
							<td><input type="text" name="txttencongty" placeholder="Nhập Tên Công Ty" ></td>
						</tr>
						<tr>
							<td>Tên giao dịch: </td>
							<td><input type="text" name="txttengiaodich" placeholder="Nhập Tên Giao Dịch" ></td>
						</tr>
							<td>Địa chỉ:</td>
							<td><input type="text" name="txtdiachi" placeholder="Nhập Địa Chỉ"></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><input type="email" name="txtemail" placeholder="Nhập Email"></td>
						</tr>
						<tr>
							<td>Điện thoại: </td>
							<td><input type="number" name="txtdienthoai" placeholder="Nhập Điện Thoại"></td>
						</tr>
						<tr>
							<td>Fax: </td>
							<td><input type="text" name="txtfax" placeholder="Nhập Số Fax"></td>
						</tr>
						<tr>
							<td>User: </td>
							<td><input type="text" name="txtuser" placeholder="Nhập User"></td>
						</tr>
						<tr>
							<td>Pass: </td>
							<td><input type="text" name="txtpass" placeholder="Nhập Pass"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Signup"></td>
							<td><input type="reset" name="Reset" value="Reset"></td>
						</tr>
					</table>
				</form>
				<?php 
					include('../show_db_mysql.php');
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO khachhang(MAKHACHHANG,TENCONGTY,TENGIAODICH,DIACHI,EMAIL,DIENTHOAI,FAX,USER,PASS) VALUES ('".$_POST["txtmakhachhang"]."','".$_POST["txttencongty"]."','".$_POST["txttengiaodich"]."','".$_POST["txtdiachi"]."','".$_POST["txtemail"]."','".$_POST["txtdienthoai"]."','".$_POST["txtfax"]."','".$_POST["txtuser"]."','".md5($_POST["txtpass"])."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
						echo "<script language='javascript' type='text/javascript'>location.href='login.php'</script>";
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
	</div>
</body>