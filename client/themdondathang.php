<div class="row">
				<div class="col-sm-12 divbody">
					<form action="#" method="post" class="form">
						<?php
							$sohoadon=date('YmdHis');
							static $x;
							$x=$sohoadon;
							$ngaydathang=date('Y-m-d',mktime(0,0,0,date("m"),date("d"),date("Y")))	;
							$ngaygiaohang=date('Y-m-d',mktime(0,0,0,date("m"),date("d")+10,date("Y")))	;
						?>
						<table class="center">
							<tr>
								<th colspan="2">Thêm Đơn Đặt Hàng</th>
							</tr>
							<tr>
								<td>Số hóa đơn:</td>
								<td><input type="text" name="txtsohoadon" placeholder="Nhập Số Hóa Đơn" required="required" value='<?php echo $x; ?>' readonly="readonly" ></td>
							</tr>
							<tr>
								<td>Mã khách hàng:</td>
								<td> <input type="text" name="txtmakhachhang" placeholder="Nhập Mã Hàng" required="required" value='<?php echo $_SESSION["name"]; ?>' readonly="readonly"></td>
							</tr>
							<tr>
								<td>Mã nhân viên:</td>
								<td><input type="text" name="txtmanhanvien" placeholder="Nhập Mã Nhân Viên" value='1' readonly="readonly"></td>
							</tr>
								<td>Ngày đặt hàng: </td>
								<td><input type="date" name="txtngaydathang" placeholder="Nhập Ngày Đặt Hàng"value='<?php echo $ngaydathang; ?>' readonly="readonly"></td>
							</tr>
							<tr>
								<td>Ngày giao hàng:</td>
								<td><input type="date" name="txtngaygiaohang" placeholder="Nhập Ngày Giao Hàng"value='<?php echo $ngaygiaohang; ?>'></td>
							</tr>
							<tr>
								<td>Ngày chuyển hàng:</td>
								<td><input type="date" name="txtngaychuyenhang" placeholder="Nhập Ngày Chuyển Hàng"></td>
							</tr>
							<tr>
								<td>Nơi giao hàng:</td>
								<td><input type="text" name="txtnoigiaohang" placeholder="Nhập Nơi Giao Hàng"></td>
							</tr>
							<tr>
								<td>Trạng thái đơn hàng:</td>
								<td><input type="text" name="txttrangthaidonhang" placeholder="Nhập Trạng Thái Đơn Hàng"></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="Save"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-12">		
					<?php 
						if(isset($_POST["submit"]))
						{
							$sql_insert="INSERT INTO dondathang(SOHOADON,MAKHACHHANG,MANHANVIEN,NGAYDATHANG,NGAYGIAOHANG,NGAYCHUYENHANG,NOIGIAOHANG,TRANGTHAIDONHANG) VALUES ('".$x."','".$_POST["txtmakhachhang"]."','".$_POST["txtmanhanvien"]."','".$_POST["txtngaydathang"]."','".$_POST["txtngaygiaohang"]."','".$_POST["txtngaychuyenhang"]."','".$_POST["txtnoigiaohang"]."','".$_POST["txttrangthaidonhang"]."')";
							echo $sql_insert;
							$res=mysqli_query($db,$sql_insert);
							if($res)
							{
								//header('Location:thanhtoan.php');
								include('themchitietdathang.php');
							}
							else
							{
								echo"<br> Không thể cập nhật đơn đặt hàng<br>";
							}
						}
					?>
				</div>