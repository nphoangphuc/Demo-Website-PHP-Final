<head>
	<?php 
	include '../show_db_mysql.php'; 
	include 'class.smtp.php'; 
	include 'class.phpmailer.php'; 
	
	if(isset($_POST['Send']))
	{
		
		$mail = new PHPMailer;
		//Enable SMTP debugging. 
		$mail->SMTPDebug = 0;                  
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = 'kanehiro2709@gmail.com';                 
		$mail->Password = '0807147852147852';                           
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "ssl";                           
		//Set TCP port to connect to 
		$mail->Port = 465;
		//Generate Random number Update To MySQL
		$Char='0123456789';
		$CharLength=strlen($Char);
		for($i=0;$i<4;$i++)
		{
			$ma.=$Char[rand(0,$CharLength-1)];
		}
		$sql_forgot="UPDATE admin SET `MA`='".$ma."' where EMAIL='".$_POST['txtreceiver']."'";
		$query=mysqli_query($db,$sql_forgot);
		//Get admin information
		$sql="SELECT * from admin where EMAIL='".$_POST['txtreceiver']."'";
		
		//$mail->Encoding='UTF-8';
		$mail->CharSet='8bit';
		$mail->IsHTML(true);
		$mail->From = 'kanehiro2709@gmail.com';
		$mail->FromName = "Dịch vụ khách hàng";

		$mail->addAddress($_POST['txtreceiver'], "Khách hàng");

		$mail->isHTML(true);
		$mail->WordWrap=900;
		
		$mail->Subject = 'Lấy lại mật khẩu';
		$mail->Body = "Mã xác nhận của bạn là:".$ma;
		$mail->AltBody = "This is the plain text version of the email content";
		if(!$mail->send()) 
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
			echo "<script language='javascript' type='text/javascript'>location.href='checkma.php'</script>";
		}
	}
	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="#" method="post" class="form">
					Nhập email để lấy lại mật khẩu<br>
					To: <input type="mail" name="txtreceiver" placeholder="Input receiver" required="required" ><br>
					<input type="submit" name="Send" value="Confirm">
				</form>
			</div>
		</div>	
	</div>
	
</body>