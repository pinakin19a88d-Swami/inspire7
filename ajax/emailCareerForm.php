<?php
if($_POST)
{
    $to_Email       = "chinmay412@gmail.com"; //Replace with recipient email address
    $subject        = 'Ah!! My email from Somebody out there...'; //Subject line for emails
    
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]))
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //Sanitize input data using PHP filter_var().
    $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
    $user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
    $user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
    
    //proceed with PHP email.

    /*
    Incase your host only allows emails from local domain, 
    you should un-comment the first line below, and remove the second header line. 
    Of-course you need to enter your own email address here, which exists in your cp.
    */
    //$headers = 'From: your-name@YOUR-DOMAIN.COM' . "\r\n" .
    $headers = 'From: '.$user_Email.'' . "\r\n" . //remove this line if line above this is un-commented
    'Reply-To: '.$user_Email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
        // send mail
    $sentMail = @mail($to_Email, $subject, $user_Message .'  -'.$user_Name, $headers);
    
    if(!$sentMail)
    {
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .' Thank you for your email'));
        die($output);
    }
}
?>