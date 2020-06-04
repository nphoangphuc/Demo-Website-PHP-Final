<head>
	<?php 
	include '../show_db_mysql.php'; 
	include 'class.smtp.php'; 
	include 'class.phpmailer.php'; 
	
	//LẤY THÔNG TIN CHƯƠNG TRÌNH
	$SQL1="SELECT * from chuongtrinhkhuyenmai where machuongtrinh='".$_GET["id"]."'";
	$result1=mysqli_query($db,$SQL1);
	echo $SQL1;
	$n=mysqli_fetch_assoc($result1);
	$mct=$n['MACHUONGTRINH'];
	$tct=$n['TENCHUONGTRINH'];
	$nd=$n['NOIDUNG'];
	$st=$n['THOIGIANBATDAU'];
	$ed=$n['THOIGIANKETTHUC'];	
	
	
	
	//GỬI MAIL
		
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
	
		//$mail->Encoding='UTF-8';
		$mail->CharSet='8bit';
		$mail->IsHTML(true);
		$mail->From = 'kanehiro2709@gmail.com';
		$mail->FromName = "Dịch vụ khách hàng";

		$mail->isHTML(true);
		$mail->WordWrap=900;
		
		//LẤY DANH SÁCH KHÁCH HÀNG
		$query = "SELECT * FROM khachhang";
		$result = mysqli_query($db, $query);
		
		//Gửi mail cho từng khách hàng
		if (!$result) exit("The query did not succeded");
		while ($row = mysqli_fetch_array($result)) {
			$to = $row['EMAIL'];
			$mail->AddAddress($to);
			$mail->Subject = 'Thông tin khuyến mãi';
			$encodedTo = rtrim(strtr(base64_encode($to), '+/', '-_'), '=');
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date = date("m/d/Y h:i:sa");
			$date .= " CST";
			$mail->Body ='<!DOCTYPE HTML>';
			$mail->Body .='<body style="padding: 0; margin: 0; background-color: #000; color: #fff; text-align: center; font-family: verdana;">';
			$mail->Body .='<div id="container" style="width: 90%; margin: 0 auto; text-align: left; background-color: #121212;">';
			$mail->Body .='<div id="header" style="background-color: #232323; color: #fff; padding: 10px;">';
			$mail->Body .='Code by HoangPhuc';
			$mail->Body .='</div>';
			$mail->Body .='<div id="subject" style="background-color: #121212; text-align: center;">';
			$mail->Body .='<h1 style="color: #ff6400; margin: 0;">'.$tct.'</h1>';
			$mail->Body .='</div>';
			$mail->Body .='<div id="message" style="background-color: #232323; color: #fff; padding: 10px;">';
			$mail->Body .=  $nd;
			$mail->Body .= '<br>Ngày bắt đầu chương trình: '.$st;
			$mail->Body .= '<br>Ngày kết thúc chương trình: '.$ed;
			$mail->Body .='</div>';
			$mail->Body .='<div id="footer" style="background-color: #121212; padding: 10px;">';
			$mail->Body .='<a href="http://google.com.vn" style="text-decoration: none; color: #ff6400;">Visit Our Site</a> | Thanks for subscribing to our newsletter!';
			$mail->Body .= $date;
			$mail->Body .='</div>';
			$mail->Body .='</body>';
			$mail->AltBody = "This is the plain text version of the email content";
		}
		if(!$mail->send()) 
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
			echo "<script language='javascript' type='text/javascript'>location.href='chuongtrinhkhuyenmai_db.php'</script>";
		}
	
	?>