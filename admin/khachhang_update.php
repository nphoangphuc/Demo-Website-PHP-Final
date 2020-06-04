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
					<?php 	
						$SQL1="SELECT * from KHACHHANG where MAKHACHHANG='".$_GET["id"]."'";
						$result1=mysqli_query($db,$SQL1);
						$n=mysqli_fetch_assoc($result1);
						$mkh=$n['MAKHACHHANG'];
						$tct=$n['TENCONGTY'];
						$tgd=$n['TENGIAODICH'];
						$dc=$n['DIACHI'];
						$mail=$n['EMAIL'];	
						$dt=$n['DIENTHOAI'];
						$fax=$n['FAX'];
						$user=$n['USER'];
						$pass=$n['PASS'];
						if(isset($_POST["submit"]))
						{
						$sql_update="UPDATE khachhang
						SET TENCONGTY='".$_POST["txttencongty"]."'".",".
						"TENGIAODICH='".$_POST["txttengiaodich"]."'".",".
						"DIACHI='".$_POST["txtdiachi"]."'".",".
						"EMAIL='".$_POST["txtemail"]."'".",".
						"DIENTHOAI='".$_POST["txtdienthoai"]."'".",".
						"FAX='".$_POST["txtfax"]."'".",".
						"USER='".$_POST["txtuser"]."'".",".
						"PASS='".$_POST["txtpass"]."'".
						"WHERE MAKHACHHANG='".$_GET["id"]."'";
						echo $sql_update;
						
						$result=mysqli_query($db,$sql_update);
						if($result){
							header('location:khachhang_db.php');
							} else {
								"Update failed";
								}	
						}
					?>
					<table class="center">
						<tr>
							<th colspan="2">Thêm Khách Hàng</th>
						</tr>
						<tr>
							<td>Mã khách hàng: </td>
							<td><input type="text" name="txtmakhachhang" placeholder="Nhập Mã Khách Hàng" required="required" readonly="readonly" value='<?php echo $mkh;?>'></td>
						</tr>
						<tr>
							<td>Tên công ty: </td>
							<td><input type="text" name="txttencongty" placeholder="Nhập Tên Công Ty" value='<?php echo $tct; ?>'></td>
						</tr>
						<tr>
							<td>Tên giao dịch: </td>
							<td><input type="text" name="txttengiaodich" placeholder="Nhập Tên Giao Dịch"  value='<?php echo $tgd; ?>'></td>
						</tr>
							<td>Địa chỉ:</td>
							<td><input type="text" name="txtdiachi" placeholder="Nhập Địa Chỉ" value='<?php echo $dc; ?>' ></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td><input type="email" name="txtemail" placeholder="Nhập Email" value='<?php echo $mail; ?>'></td>
						</tr>
						<tr>
							<td>Điện thoại: </td>
							<td><input type="number" name="txtdienthoai" placeholder="Nhập Điện Thoại" value='<?php echo $dt; ?>'></td>
						</tr>
						<tr>
							<td>Fax: </td>
							<td> <input type="text" name="txtfax" placeholder="Nhập Số Fax" value='<?php echo $fax; ?>'></td>
						</tr>
						<tr>
							<td>User: </td>
							<td> <input type="text" name="txtuser" placeholder="Nhập User" value='<?php echo $user; ?>'></td>
						</tr>
						<tr>
							<td>Pass: </td>
							<td> <input type="text" name="txtpass" placeholder="Nhập Pass" value='<?php echo $pass; ?>'></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>

			</div>
			<div class="col-sm-4">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 m-1 sticky-bottom divfooter">
				<?php
				include 'footer-admin.php';
				?>
			</div>
		</div>	
	</div>
</body>