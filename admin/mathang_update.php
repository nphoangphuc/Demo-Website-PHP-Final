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
				<form action="#" method="post" class="form" enctype="multipart/form-data">
				<?php 
					include 'show_db_mysql.php'; 
				
					$SQL1="SELECT * from mathang where MAHANG='".$_GET["id"]."'";
					$result1=mysqli_query($db,$SQL1);
					echo $SQL1;
					$n=mysqli_fetch_assoc($result1);
					$mh=$n['MAHANG'];
					$th=$n['TENHANG'];
					$mct=$n['MACONGTY'];
					$mlh=$n['MALOAIHANG'];
					$sl=$n['SOLUONG'];	
					$dvt=$n['DONVITINH'];
					$gh=$n['GIAHANG'];
					$img=$n['HINH'];
					
					function  function_alert($message) 
					{ 
					// Display the alert box  
					echo "<script>alert('$message');</script>"; 
					}
				?>
					<table class="center">
						<tr>
							<th colspan="2">Thêm Mặt Hàng</th>
						</tr>
						<tr>
							<td>Mã hàng: </td>
							<td><input type="text" name="txtmahang" placeholder="Nhập Mã hàng" required="required" readonly="readonly" value='<?php echo $mh; ?>'></td>
						</tr>
						<tr>
							<td>Tên Hàng: </td>
							<td><input type="text" name="txttenhang" placeholder="Nhập Tên Hàng" value='<?php echo $th; ?>'></td>
						</tr>
						<tr>
							<td>Mã Công Ty: </td>
							<td><input type="text" name="txtmacongty" placeholder="Nhập Mã Công Ty" value='<?php echo $mct; ?>'></td>
						</tr>
							<td>Mã Loại Hàng: </td>
							<td><input type="text" name="txtmaloaihang" placeholder="Nhập Mã Loại Hàng" value='<?php echo $mlh; ?>'></td>
						</tr>
						<tr>
							<td>Số Lượng: </td>
							<td><input type="number" name="txtsoluong" placeholder="Nhập Số Lượng" value='<?php echo $sl; ?>'></td>
						</tr>
						<tr>
							<td>Đơn Vị Tính: </td>
							<td><input type="text" name="txtdonvitinh" placeholder="Nhập Đơn Vị Tính" value='<?php echo $dvt; ?>'></td>
						</tr>
						<tr>
							<td>Giá Hàng: </td>
							<td><input type="text" name="txtgiahang" placeholder="Nhập Giá Hàng" value='<?php echo $gh; ?>'></td>
						</tr>
						<tr>
							<td>Hình:</td>
							<td><?php echo "<img src='".$img."' width=100 height=100/>";?></td>
						</tr>
						<tr>
							<td>Select File to upload: </td>
							<td><input type="file" name="fhinh" ></td>
						</tr>
						<tr>
							<td colspan=2><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$target_file="";
						$sql_hinh="";
						$error=array();
						$flag=true;

						if(isset($_FILES['fhinh']))
						{
							$uploaddir = '../uploads/'.$_POST['txtmaloaihang'].'_';
							print "<pre>";
							$target_file=$uploaddir.$_FILES['fhinh']['name'];
							$target_file_extension   = $uploaddir . basename($_FILES["fhinh"]["name"]);
							$extension = pathinfo($target_file, PATHINFO_EXTENSION);
							$extension_allow=array('png','jpg','jpeg','gif');
							$checkimg = getimagesize($_FILES["fhinh"]["tmp_name"]);
							if($checkimg == false) 
							{
								echo "echo-Đây không phải file ảnh.";
								$message='alert-Không phải hình ảnh';
								function_alert($message);							
								$flag=false;
								$error['fhinh']='error-Không phải định dạng ảnh ';
							}
							else if(!in_array(strtolower($extension),$extension_allow))
							{
								$error['fhinh']='Chỉ cho phép định dạng jpg,png,jpeg,gif';
								echo '<script>alert("Định dạng không hợp lệ")</script>';
								$flag=false;
							}
							else if(file_exists($target_file))
							{
								$error['fhinh']='Trùng file';
								echo '<script>alert("Trùng file")</script>';
								$flag=false;
							}
						}
						else
						{
							$flag=false;
							print 'Hãy chọn file upload';
						}
							
						if($flag==true)
						{
							if(move_uploaded_file($_FILES['fhinh']['tmp_name'], $target_file))
							{
								echo "Upload successfully.<br>";
								$sql_hinh=", HINH ='".$target_file." ' ";
							}
							else
							{
								echo "Có lỗi xảy ra khi upload file.<br>";
							}
							
						}

						if($flag==true)
						{
							$sql_update="UPDATE mathang
							SET TENHANG='".$_POST["txttenhang"]."'".",".
							"MACONGTY='".$_POST["txtmacongty"]."'".",".
							"MALOAIHANG='".$_POST["txtmaloaihang"]."'".",".
							"SOLUONG='".$_POST["txtsoluong"]."'".",".
							"DONVITINH='".$_POST["txtdonvitinh"]."'".",".
							"GIAHANG='".$_POST["txtgiahang"]."'".
							$sql_hinh.
							"WHERE MAHANG	='".$_GET["id"]."'";
							
							echo $sql_update;
							
							$result=mysqli_query($db,$sql_update);
							if($result)
							{
								echo "<script language='javascript' type='text/javascript'>location.href='mathang_db.php'</script>";
							} 
							else 
							{
								"Update failed";
							}	
						}
						else
						{
							foreach($error as $key=>$value)
							{
								echo "<br>".$value."<br>";
							}
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