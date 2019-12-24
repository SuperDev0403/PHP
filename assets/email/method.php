<?php
    require("class.phpmailer.php");
    require("class.smtp.php");
    date_default_timezone_set('UTC');

    if (isset($_POST['email']))
    {
        
        
        $message = "";
		$message .= "<div>";
		$message .= '<h3>Hi, Mainellomontage user needs your service!</h3><br>';
		$message .= '<table>';
		
		$message .= '<tr><td><h4>Name :</h4></td><td><p>'.$_POST['name'].'</p></td></tr>';
		$message .= '<tr><td><h4>Number :</h4></td><td><p>'.$_POST['phone'].'</p></td></tr>';
		$message .= '<tr><td><h4>Email :</h4></td><td><p>'.$_POST['email'].'</p></td></tr>';
		$message .= '<tr><td><h4>Content :</h4></td><td><p>'.$_POST['message'].'</p></td></tr>';

		$message .= '</table>';
		$message .= "</div>";
		
		
		
// 		$message = $_POST['message'];	
		
        $fromEmail = $_POST['email'];
        $mailto = "zach@mainellomontage.com";
        // $mailto = "butfly824@gmail.com";
        
        
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
        
        $mail->Username = "zach@mainellomontage.com";
        $mail->Password = "523AggiesFirst118!";

        $mail->setFrom($fromEmail, $_POST['name']);
        $mail->AddAddress($mailto, "Admin");
        
        // $mail->addAddress($mailto);
        // $mail->From = $fromEmail;
        
        $mail->isHTML(true); // set email format to HTML 

        $mail->Subject = $subject;
        $mail->Body = $message;

            
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