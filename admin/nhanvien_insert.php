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
							<th colspan="2">Thêm Nhân Viên</th>
						</tr>
						<tr>
							<td>Mã Nhân Viên: </td>
							<td><input type="text" name="txtmanhanvien" placeholder="Nhập Mã Nhân Viên" required="required"></td>
						</tr>
						<tr>
							<td>Họ:</td>
							<td><input type="text" name="txtho" placeholder="Nhập Họ"></td>
						</tr>
						<tr>
							<td>Tên:</td>
							<td><input type="text" name="txtten" placeholder="Nhập Tên" ></td>
						</tr>
							<td>Ngày Sinh: </td>
							<td><input type="date" name="txtngaysinh" placeholder="Nhập Ngày Sinh"  ></td>
						</tr>
						<tr>
							<td>Ngày Làm Việc: </td>
							<td><input type="date" name="txtngaylamviec" placeholder="Nhập Ngày Làm Việc" ></td>
						</tr>
						<tr>
							<td>Địa chỉ: </td>
							<td><input type="text" name="txtdiachi" placeholder="Nhập Địa Chỉ" ></td>
						</tr>
						<tr>
							<td>Điện Thoại:</td>
							<td><input type="number" name="txtdienthoai" placeholder="Nhập Điện Thoại" ></td>
						</tr>
						<tr>
							<td>Lương Cơ Bản: </td>
							<td><input type="number" name="txtluongcoban" placeholder="Nhập Lương Cơ Bản" ></td>
						</tr>
						<tr>
							<td>Phụ Cấp: </td>
							<td><input type="number" name="txtphucap" placeholder="Nhập Phụ Cấp"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO nhanvien(MANHANVIEN,HO,TEN,NGAYSINH,NGAYLAMVIEC,DIACHI,DIENTHOAI,LUONGCOBAN,PHUCAP) VALUES ('".$_POST["txtmanhanvien"]."','".$_POST["txtho"]."','".$_POST["txtten"]."','".$_POST["txtngaysinh"]."','".$_POST["txtngaylamviec"]."','".$_POST["txtdiachi"]."','".$_POST["txtdienthoai"]."','".$_POST["txtluongcoban"]."','".$_POST["txtphucap"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							echo "<script language='javascript' type='text/javascript'>location.href='nhanvien_db.php'</script>";
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