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
						$SQL1="SELECT * from NHANVIEN where MANHANVIEN='".$_GET["id"]."'";
						$result1=mysqli_query($db,$SQL1);
						$n=mysqli_fetch_assoc($result1);
						$mnv=$n['MANHANVIEN'];
						$ho=$n['HO'];
						$ten=$n['TEN'];
						$ns=$n['NGAYSINH'];
						$nlv=$n['NGAYLAMVIEC'];	
						$dc=$n['DIACHI'];
						$dt=$n['DIENTHOAI'];
						$lcb=$n['LUONGCOBAN'];
						$pc=$n['PHUCAP'];
						
						if(isset($_POST["submit"]))
						{
							$sql_update="UPDATE nhanvien
							SET HO='".$_POST["txtho"]."'".",".
							"TEN='".$_POST["txtten"]."'".",".
							"NGAYSINH='".$_POST["txtngaysinh"]."'".",".
							"NGAYLAMVIEC='".$_POST["txtngaylamviec"]."'".",".
							"DIACHI='".$_POST["txtdiachi"]."'".",".
							"DIENTHOAI='".$_POST["txtdienthoai"]."'".",".
							"LUONGCOBAN='".$_POST["txtluongcoban"]."'".",".
							"PHUCAP='".$_POST["txtphucap"]."'".
							"WHERE MANHANVIEN='".$_GET["id"]."'";
							
							
							echo $sql_update;
							
							$result=mysqli_query($db,$sql_update);
							if($result){
								header('location:nhanvien_db.php');
								} else {
									"Update failed";
									}	
						}
					?>
					<table class="center">
						<tr>
							<th colspan="2">Sửa Thông Tin Nhân Viên</th>
						</tr>
						<tr>
							<td>Mã Nhân Viên: </td>
							<td> <input type="text" name="txtmanhanvien" placeholder="Nhập Mã Nhân Viên" required="required" readonly="readonly" value='<?php echo $mnv; ?>'></td>
						</tr>
						<tr>
							<td>Họ:</td>
							<td><input type="text" name="txtho" placeholder="Nhập Họ" value='<?php echo $ho; ?>'></td>
						</tr>
						<tr>
							<td>Tên:</td>
							<td><input type="text" name="txtten" placeholder="Nhập Tên" value='<?php echo $ten; ?>'></td>
						</tr>
							<td>Ngày Sinh: </td>
							<td><input type="date" name="txtngaysinh" placeholder="Nhập Ngày Sinh" value='<?php echo $ns; ?>'></td>
						</tr>
						<tr>
							<td>Ngày Làm Việc: </td>
							<td><input type="date" name="txtngaylamviec" placeholder="Nhập Ngày Làm Việc" value='<?php echo $nlv; ?>'></td>
						</tr>
						<tr>
							<td>Địa chỉ: </td>
							<td><input type="text" name="txtdiachi" placeholder="Nhập Địa Chỉ" value='<?php echo $dc; ?>'></td>
						</tr>
						<tr>
							<td>Điện Thoại:</td>
							<td><input type="number" name="txtdienthoai" placeholder="Nhập Điện Thoại" value='<?php echo $dt; ?>'></td>
						</tr>
						<tr>
							<td>Lương Cơ Bản: </td>
							<td><input type="number" name="txtluongcoban" placeholder="Nhập Lương Cơ Bản" value='<?php echo $lcb; ?>'></td>
						</tr>
						<tr>
							<td>Phụ Cấp: </td>
							<td><input type="number" name="txtphucap" placeholder="Nhập Phụ Cấp" value='<?php echo $pc; ?>'></td>
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
			<div>
		</div>	
	</div>
</body>