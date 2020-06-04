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
		<div class="row m-1 ">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 m-1 divbody">
				<?php 	
					$SQL1="SELECT * from CHITIETDATHANG where SOHOADON='".$_GET["id1"]."'"." AND MAHANG='".$_GET["id2"]."'";
					$result1=mysqli_query($db,$SQL1);
					$n=mysqli_fetch_assoc($result1);
					$shd=$n['SOHOADON'];
					$mh=$n['MAHANG'];
					$gb=$n['GIABAN'];
					$sl=$n['SOLUONG'];
					$mgg=$n['MUCGIAMGIA'];
					
					if(isset($_POST["submit"]))
					{
						$sql_update="UPDATE chitietdathang 
						SET giaban='".$_POST["txtgiaban"]."'".","."soluong='".$_POST["txtsoluong"]."'".","."mucgiamgia='".$_POST["txtmucgiamgia"]."'".
						"WHERE SOHOADON='".$_GET["id1"]."'"."AND MAHANG='".$_GET["id2"]."'";
												
						$result=mysqli_query($db,$sql_update);
						if($result){
							header('location:chitietdathang_db.php');
							} else {
								"Update failed";
								}	
					}
					
				?>
				<form action="#" method="post" class="form">
					<table class="center">
						<tr>
							<th colspan="2">Sửa Chi Tiết Đặt Hàng</th>
						</tr>
						<tr>
							<td>Số hóa đơn:</td>
							<td><input type="text" name="txtsohoadon" placeholder="Nhập Số Hóa Đơn" required="required" readonly="readonly" value='<?php echo $shd; ?>'></td>
						</tr>
						<tr>
							<td>Mã hàng:</td>
							<td><input type="text" name="txtmahang" placeholder="Nhập Mã Hàng" required="required" readonly="readonly" value='<?php echo $mh; ?>'></td>
						</tr>
						<tr>
							<td>Giá bán:</td>
							<td><input type="text" name="txtgiaban" placeholder="Nhập Giá Bán" required="required" value='<?php echo $gb; ?>'></td>
						</tr>
							<td>Số lượng: </td>
							<td><input type="text" name="txtsoluong" placeholder="Nhập Số Lượng" required="required" value='<?php echo $sl; ?>' ></td>
						</tr>
						<tr>
							<td>Mức giảm giá:</td>
							<td><input type="text" name="txtmucgiamgia" placeholder="Nhập Mức Giảm Giá" required="required" value='<?php echo $mgg; ?>'></td>
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