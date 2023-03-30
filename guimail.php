<!-- Gửi mail đăng ký  -->
<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			require("PHPMailer-master/src/PHPMailer.php");
			require("PHPMailer-master/src/SMTP.php");
			require("PHPMailer-master/src/Exception.php");

			$email = $_POST['emaildangky'];

			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->IsSMTP(); // enable SMTP

			$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true);
			$mail->Username = "tranvanloc96lhp@gmail.com";
			$mail->Password = "xjcebhdgwsyqwhlk";
			$mail->SetFrom("tranvanloc96lhp@gmail.com");
			$mail->Subject = "Verify your email address";
			$mail->Body = "hello lộc";
			$mail->AddAddress($email);

			if(!$mail->Send()){
				echo "<p>Mailer Error: " . $mail->ErrorInfo . "</p>";
			}else{
				echo "<p>Message has been sent to " . $email . "</p>";
			}
		}
	?>