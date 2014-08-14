<?php
    
require '../ajax/PHPMailerAutoload.php';

$postAppliedFor = strip_tags(trim($_POST["postAppliedFor"]));
                $postAppliedFor = str_replace(array("\r","\n"),array(" "," "),$postAppliedFor);
        
$nameOfCandidate = strip_tags(trim($_POST["nameOfCandidate"]));
        $nameOfCandidate = str_replace(array("\r","\n"),array(" "," "),$nameOfCandidate);

$eduQualification = strip_tags(trim($_POST["eduQualification"]));
        $eduQualification = str_replace(array("\r","\n"),array(" "," "),$eduQualification);

$areaOfExpertise = strip_tags(trim($_POST["areaOfExpertise"]));
        $areaOfExpertise = str_replace(array("\r","\n"),array(" "," "),$areaOfExpertise);

$totalExperience = strip_tags(trim($_POST["totalExperience"]));
        $totalExperience = str_replace(array("\r","\n"),array(" "," "),$totalExperience);

// $address = strip_tags(trim($_POST["address"]));
//         $address = str_replace(array("\r","\n"),array(" "," "),$address);
$address = trim($_POST["address"]);

$phoneNumber = strip_tags(trim($_POST["phoneNumber"]));
        $phoneNumber = str_replace(array("\r","\n"),array(" "," "),$phoneNumber);

$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

$mail = new PHPMailer;

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'user@example.com';                 // SMTP username
// $mail->Password = 'secret';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = '$email';
$mail->FromName = '$nameOfCandidate';
$mail->addAddress('chinmay412@gmail.com', 'Chinmay Patil');     // Add a recipient
$mail->addReplyTo('info@inspiremultimedia.co.in', 'Inspire Multimedia');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
