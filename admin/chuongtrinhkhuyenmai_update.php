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
						$SQL1="SELECT * from chuongtrinhkhuyenmai where machuongtrinh='".$_GET["id"]."'";
						$result1=mysqli_query($db,$SQL1);
						echo $SQL1;
						$n=mysqli_fetch_assoc($result1);
						$mct=$n['MACHUONGTRINH'];
						$tct=$n['TENCHUONGTRINH'];
						$nd=$n['NOIDUNG'];
						$st=$n['THOIGIANBATDAU'];
						$ed=$n['THOIGIANKETTHUC'];
						if(isset($_POST["submit"]))
						{
							$sql_update="UPDATE chuongtrinhkhuyenmai
							SET machuongtrinh='".$_POST["txtmachuongtrinh"]."'".",".
							"TENCHUONGTRINH='".$_POST["txttenchuongtrinh"]."'".",".
							"NOIDUNG='".$_POST["txtnoidung"]."'".",".
							"THOIGIANBATDAU='".$_POST["txtstarttime"]."'".",".
							"THOIGIANKETTHUC='".$_POST["txtendtime"]."'".
							"WHERE machuongtrinh='".$_GET["id"]."'";
							
							
							echo $sql_update;
							
							$result=mysqli_query($db,$sql_update);
							if($result){
								header('location:sanpham_db.php');
								} else {
									"Update failed";
									}	
						}
					?>
					<table class="center">
						<tr>
							<th colspan="2">Sửa Chương Trình Khuyến Mãi</th>
						</tr>
						<tr>
							<td>Mã Chương Trình: </td>
							<td><input type="text" name="txtmachuongtrinh" placeholder="Nhập Mã Sản Phẩm" required="required" value='<?php echo $mct; ?>'></td>
						</tr>
						<tr>
							<td>Tên Chương Trình: </td>
							<td><input type="text" name="txttenchuongtrinh" placeholder="Nhập Tên Sản Phẩm" value='<?php echo $tct; ?>'></td>
						</tr>
						<tr>
							<td>Nội Dung:</td>
							<td><textarea rows="5" cols="23" name="txtnoidung" placeholder="Nhập Nội Dung"><?php echo $nd; ?></textarea></td>
						</tr>
							<td>Thời Gian Bắt Đầu: </td>
							<td><input type="date" name="txtstarttime" placeholder="Nhập Mô Tả" value='<?php echo $st; ?>'></td>
						</tr>
						</tr>
							<td>Thời Gian Kết Thúc: </td>
							<td><input type="date" name="txtendtime" placeholder="Nhập Mô Tả" value='<?php echo $ed; ?>'></td>
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
							header('Location:chuongtrinhkhuyenmai_db.php');
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