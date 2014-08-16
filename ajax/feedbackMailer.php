<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $companyName_fb = strip_tags(trim($_POST["companyName_fb"]));
                $companyName_fb = str_replace(array("\r","\n"),array(" "," "),$companyName_fb);
        
        $personName_fb = strip_tags(trim($_POST["personName_fb"]));
                $personName_fb = str_replace(array("\r","\n"),array(" "," "),$personName_fb);
        
        $phoneNumer_fb = strip_tags(trim($_POST["phoneNumer_fb"]));
                $phoneNumer_fb = str_replace(array("\r","\n"),array(" "," "),$phoneNumer_fb);

        $email = filter_var(trim($_POST["email_fb"]), FILTER_SANITIZE_EMAIL);

        $remarks_fb = strip_tags(trim($_POST["remarks_fb"]));
                $remarks_fb = str_replace(array("\r","\n"),array(" "," "),$remarks_fb);

        // Check that data was sent to the mailer.
        if ( empty($companyName_fb) OR 
            empty($personName_fb) OR 
            empty($phoneNumer_fb) OR 
            !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 400;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.

        $recipient = "info@inspiremultimedia.co.in";

        // Set the email subject.
        $subject = "New Feedback Form from - $personName_fb";

        // Build the email content.
        $email_content = "Company Name: $companyName_fb\n";
        $email_content .= "Person Name: $personName_fb\n";
        $email_content .= "Phone / Mobile: $phoneNumer_fb\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Remarks: $remarks_fb\n";
        $email_content .= "Interested In: \n";
        if(!empty($_POST['interestedIn'])) {
            foreach($_POST['interestedIn'] as $check) {
                $email_content .= "$check\n"; 
            }
        }
        

        // Build the email headers.
        // $email_headers = "From: $nameOfCandidate <$email>";
        $email_headers .= "Reply-To: <info@inspiremultimedia.co.in>\r\n"; 
        $email_headers .= "Return-Path: <info@inspiremultimedia.co.in>\r\n"; 
        $email_headers .= "From: $personName_fb <$email>\r\n"; 
        $email_headers .= "Organization: My Organization\r\n"; 
        $email_headers .= "Content-Type: text/plain\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            // http_response_code(200);
            if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 200;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            // http_response_code(500);
            if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 500;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        // http_response_code(403);
        if (!function_exists('http_response_code'))
            {
                function http_response_code($newcode = NULL)
                {
                    static $code = 403;
                    if($newcode !== NULL)
                    {
                        header('X-PHP-Response-Code: '.$newcode, true, $newcode);
                        if(!headers_sent())
                            $code = $newcode;
                    }       
                    return $code;
                }
            }
        echo "There was a problem with your submission, please try again.";
    }

?>
