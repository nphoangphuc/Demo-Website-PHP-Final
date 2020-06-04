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
							<th colspan="2">Thêm Chương Trình Khuyến Mãi</th>
						</tr>
						<tr>
							<td>Mã Chương Trình: </td>
							<td><input type="text" name="txtmachuongtrinh" placeholder="Nhập Mã Sản Phẩm" required="required" ></td>
						</tr>
						<tr>
							<td>Tên Chương Trình: </td>
							<td><input type="text" name="txttenchuongtrinh" placeholder="Nhập Tên Sản Phẩm" ></td>
						</tr>
						<tr>
							<td>Nội Dung:</td>
							<td><textarea rows="5" cols="23" name="txtnoidung" placeholder="Nhập Nội Dung"></textarea></td>
						</tr>
							<td>Thời Gian Bắt Đầu: </td>
							<td><input type="date" name="txtstarttime" placeholder="Nhập Mô Tả"></td>
						</tr>
						</tr>
							<td>Thời Gian Kết Thúc: </td>
							<td><input type="date" name="txtendtime" placeholder="Nhập Mô Tả"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$sql_insert="INSERT INTO CHUONGTRINHKHUYENMAI(MACHUONGTRINH,TENCHUONGTRINH,NOIDUNG,THOIGIANBATDAU,THOIGIANKETTHUC) VALUES ('".$_POST["txtmachuongtrinh"]."','".$_POST["txttenchuongtrinh"]."','".$_POST["txtnoidung"]."','".$_POST["txtstarttime"]."','".$_POST["txtendtime"]."')";
						echo $sql_insert;
						$res=mysqli_query($db,$sql_insert);
						if($res)
						{
							header('Location:CHUONGTRINHKHUYENMAI_DB.php');
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