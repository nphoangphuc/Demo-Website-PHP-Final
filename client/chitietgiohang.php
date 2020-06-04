<html lang="en"	>
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
					include 'Menu.php';
					?>
				</div>
			</div>	
			<div class="row " >
				<div class="col-sm-12 m-1 divbody">
					<?php
					$ok=1;
					if(isset($_SESSION['cart']))
						{
							foreach($_SESSION['cart'] as $k)
							{
								if(isset($k))
								{
									$ok=2;
								}	
							}
						}
						if($ok==2)
						{
							echo "<form action='chitietgiohang.php' method='post'>";
							$str=0;
							foreach($_SESSION['cart'] as $key=>$value)
							{
								$item[]="'".$key."'";
							}
							$str= implode(",",$item);
							$sql="Select * from MATHANG where MAHANG in ($str)";
							$query=mysqli_query($db,$sql);
							$total="0";
						?>
						<table border="1" class="center">
						<tr>
							<th>
								<label>Hình</label>
							</th>
							<th>
								<label>Tên sản phẩm</label>
							</th>
							<th>
								<label>Đơn giá</label>
							</th>
							<th>
								<label>Đơn vị tính</label>
							</th>
							<th>
								<label>Số lượng</label>
							</th>
							<th>
								<label>Tổng tiền</label>
							</th>
							<th>
								<label>Xóa món hàng</label>
							</th>
						<?php
						while($row=mysqli_fetch_array($query))
						{
							echo "<tr>";
								echo "<td><img src='".$row['HINH']."' width=100 height=100/></td>";
								echo '<td>'.$row['TENHANG'].'</td>';
								echo '<td>'.$row['GIAHANG'].'</td>';
								echo '<td>'.$row['DONVITINH'].'</td>';
								echo "<td align=right><input type=text name=qty[$row[MAHANG]] size=2 value={$_SESSION['cart'][$row['MAHANG']]}></td>";
								echo "<td align=right>".number_format($_SESSION['cart'][$row['MAHANG']]*$row['GIAHANG'],3)."VND</td>";
								echo "<td align=right><b> <a href='delcart.php?productid=".$row['MAHANG']."'>Xóa</a></b> </td>";
								$total+=$_SESSION['cart'][$row['MAHANG']]*$row['GIAHANG'];
							echo "</tr>";
						}
						?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><h5><?php echo "<font color=red>".number_format($total,3)." VNĐ</font></b>" ?> </h1></td>	
							</tr>		
						</table>	
						<?php 
						echo "<div class='pro' align='right'>";
						echo "</div>";
						echo "<input type='submit' name='submit' value='Cập nhật giỏ hàng'>";
						echo "<div class='pro' align='center'>";
						echo "<b><a href='sanpham.php'> Mua Tiếp</a> - <a href='delcart.php?productid=0'> Xóa giỏ hàng</a></b><br>";
						echo "<b><a href='thanhtoan.php'> Thanh toán</a></b>";
						echo "</div>";
					}	
					else
					{
						echo 'Giỏ hàng rỗng';
					}
					?>	
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-12 m-1 divfooter">
					<?php
					include 'footer.php';
					?>
				<div>
			</div>	
		</div>	
	</body>
</html>