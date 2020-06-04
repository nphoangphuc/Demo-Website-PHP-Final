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
					$SQL1="SELECT * from dondathang where SOHOADON='".$_GET["id1"]."'";
						$result1=mysqli_query($db,$SQL1);
						$n=mysqli_fetch_assoc($result1);
						$shd=$n['SOHOADON'];
						$mkh=$n['MAKHACHHANG'];
						$mnv=$n['MANHANVIEN'];
						$ndh=$n['NGAYDATHANG'];
						$ngh=$n['NGAYGIAOHANG'];
						$nch=$n['NGAYCHUYENHANG'];
						$ngh=$n['NOIGIAOHANG'];
						$ttdh=$n['TRANGTHAIDONHANG'];
						
					if(isset($_POST["submit"]))
					{
						$sql_update="UPDATE dondathang 
						SET MAKHACHHANG='".$_POST["txtmakhachhang"]."'".",".
						"MANHANVIEN='".$_POST["txtmanhanvien"]."'".",".
						"NGAYDATHANG='".$_POST["txtngaydathang"]."'".",".
						"NGAYGIAOHANG='".$_POST["txtngaygiaohang"]."'".",".
						"NGAYCHUYENHANG='".$_POST["txtngaychuyenhang"]."'".",".
						"NOIGIAOHANG='".$_POST["txtnoigiaohang"]."'".",".
						"TRANGTHAIDONHANG='".$_POST["txttrangthaidonhang"]."'".
						" WHERE SOHOADON='".$_GET["id1"]."'";						
						echo $sql_update;
						$result=mysqli_query($db,$sql_update);
						if($result){
							header('location:dondathang_db.php');
							} else {
								"Update failed";
								}	
					}
				?>
					<table class="center">
						<tr>
							<th colspan="2">Thêm Đơn Đặt Hàng</th>
						</tr>
						<tr>
							<td>Số hóa đơn:</td>
							<td><input type="text" name="txtsohoadon" placeholder="Nhập Số Hóa Đơn" required="required" readonly="readonly" value='<?php echo $shd; ?>'></td>
						</tr>
						<tr>
							<td>Mã khách hàng:</td>
							<td><input type="text" name="txtmakhachhang" placeholder="Nhập Mã Hàng" required="required" value='<?php echo $mkh; ?>'></td>
						</tr>
						<tr>
							<td>Mã nhân viên:</td>
							<td><input type="text" name="txtmanhanvien" placeholder="Nhập Giá Bán"required="required" value='<?php echo $mnv; ?>'></td>
						</tr>
							<td>Ngày đặt hàng: </td>
							<td><input type="date" name="txtngaydathang" placeholder="Nhập Ngày Đặt Hàng" value='<?php echo $ndh; ?>' ></td>
						</tr>
						<tr>
							<td>Ngày giao hàng:</td>
							<td><input type="date" name="txtngaygiaohang" placeholder="Nhập Mức Giảm Giá" value='<?php echo $ngh; ?>'></td>
						</tr>
						<tr>
							<td>Ngày chuyển hàng:</td>
							<td><input type="date" name="txtngaychuyenhang" placeholder="Nhập Ngày Chuyển Hàng"  value='<?php echo $nch; ?>'></td>
						</tr>
						<tr>
							<td>Nơi giao hàng:</td>
							<td><input type="text" name="txtnoigiaohang" placeholder="Nhập Nơi Giao Hàng"  value='<?php echo $ngh; ?>'></td>
						</tr>
						<tr>
							<td>Trạng thái đơn hàng:</td>
							<td><input type="text" name="txttrangthaidonhang" placeholder="Nhập Trạng Thái Đơn Hàng" value='<?php echo $ttdh; ?>'></td>
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
</body>