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
					<table class="center">
						<tr>
							<th colspan="2">Thêm Loại Hàng</th>
						</tr>
						<tr>
							<td>MÃ LOẠI HÀNG: </td>
							<td><input type="text" name="txtmaloaihang" placeholder="Nhập Mã Loại Hàng" required="required" ></td>
						</tr>
						<tr>
							<td>TÊN LOẠI HÀNG: </td>
							<td><input type="text" name="txttenloaihang" placeholder="Nhập Tên Loại Hàng" required="required"></td>
						</tr>
						<tr>
							<td>Select File to upload: </td>
							<td><input type="file" name="fhinh" ></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Save"></td>
						</tr>
					</table>
				</form>
				<?php 
					if(isset($_POST["submit"]))
					{
						$target_file="";
						$error=array();
						$flag=true;
						if(isset($_FILES['fhinh']))
						{
							$uploaddir = '../uploads/'.$_POST['txtmaloaihang'].'_';
							print "<pre>";
							$target_file=$uploaddir.$_FILES['fhinh']['name'];
							$extension = pathinfo($_FILES['fhinh']['name'], PATHINFO_EXTENSION);
							$extension_allow=array('png','jpg','jpeg','gif');
							if(!in_array(strtolower($extension),$extension_allow))
							{
								$error['fhinh']='Lỗi định dạng';
								$flag=false;
							}
							else if(file_exists($target_file))
							{
								$error['fhinh']='Trùng file';
								$flag=false;
							}
							if(empty($error))
							{
								if(move_uploaded_file($_FILES['fhinh']['tmp_name'], $target_file))
								{
									print "Upload successfully";
								}
								else
								{
									$flag=false;
									print 'Hãy chọn file upload';
								}
							}
						}
						if($flag==true)
						{
							echo $target_file;
							$sql_insert="INSERT INTO loaihang(MALOAIHANG,TENLOAIHANG,HINH) VALUES ('".$_POST["txtmaloaihang"]."','".$_POST["txttenloaihang"]."','".$target_file."')";
							echo $sql_insert;
							$res=mysqli_query($db,$sql_insert);
							
							if($res)
							{
								header('Location:loaihang_db.php');
							}
							else
							{
							echo"<br> Không thể cập nhật<br>";
							}
						}
						else
						{
							foreach($error as $key=>$value)
							{
								echo $value."<br>";
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