<?php
    require("class.phpmailer.php");
    require("class.smtp.php");
    date_default_timezone_set('UTC');

    if (isset($_POST['email']))
    {
		$message = $_POST['message'];	
		
        $fromEmail = "zacharymainello@gmail.com";
        $mailto = "zacharymainello@gmail.com";
        
		$subject = "Contact Message From ".$_POST['email'];

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPDebug  =0;
        $mail->CharSet ="UTF-8";
        $mail->Host = "localhost";
        $mail->Port = 25; 
        $mail->IsHTML(true);
        //$mail->SMTPAuth = "none";
        //$mail->SMTPSecure = false;
        $mail->Username = "zacharymainello@gmail.com";
        $mail->Password = "523Barton118!";

        $mail->From = $fromEmail;
        // $mail->AddAddress($address, "support");
        
        $mail->isHTML(true); // set email format to HTML 

        $mail->Subject = $subject;
        $mail->Body = $message;
        // $mail->AltBody = $message;
		$mail->addAddress($mailto,'Admin');
            
        if(!$mail->Send()) 
        {
            echo 'Mailer Error: ' . $mail-> ErrorInfo;
        } 
        else 
        {
          echo "sent";
        }
    }
?>