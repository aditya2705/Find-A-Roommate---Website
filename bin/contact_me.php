<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
//$to = 'pratik.panjwani94@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "E-Cell Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
//$headers = "From: noreply@gmail.com\n\\\\";
//$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body,$headers);




date_default_timezone_set('Asia/Kolkata');
            require 'PHPMailer-master/PHPMailerAutoload.php';  // import this fle and its functions
            
            $mail = new PHPMailer;  // create a mail object
            
            $mail->isSMTP();                                      // Set mailer to use SMTP (common for gmail and other mailing sites)
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            //$mail->Port       = 25;
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'adityarathi95@gmail.com';                 // SMTP username
            $mail->Password ="ASRathi@95";                        // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
            $mail-> Port = 587;
            $mail->From = $email_address;
            $mail->FromName = 'Mail';
            $mail->addAddress($email_address);     // Add a recipient , Name is optional This is the address to which the mail has to be sent
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
            
            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML
            
            $mail->Subject = $email_subject;//'Hello World';  // SUBJECT
            $mail->Body    =$email_body;//"hello"; //$GLOBALS['text'];  // BODY
            
            if(!$mail->send()) {
                echo "Msg could not be sent";
                echo 'Mailer Error: ' . $mail->ErrorInfo;
				return false;
            } else {
                echo "Message has been sent";
				return true;
            }




return false;			
?>