<?php
    
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
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
        

        // Check that data was sent to the mailer.
        if ( empty($postAppliedFor) OR 
            empty($nameOfCandidate) OR 
            empty($eduQualification) OR 
            empty($areaOfExpertise) OR 
            empty($totalExperience) OR 
            empty($address) OR 
            empty($phoneNumber) OR 
            !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            // http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.

        $recipient = "info@inspiremultimedia.co.in";

        // Set the email subject.
        $subject = "New Career Form from - $nameOfCandidate";

        // Build the email content.
        $email_content = "Post Applied For: $postAppliedFor\n";
        $email_content .= "Name: $nameOfCandidate\n";
        $email_content .= "Educational Qualification: $eduQualification\n";
        $email_content .= "Area of Expertise: $areaOfExpertise\n";
        $email_content .= "Total Experience: $totalExperience\n";
        $email_content .= "Address: $address\n";
        $email_content .= "Phone Number: $phoneNumber\n";
        $email_content .= "Email: $email\n";

        // Build the email headers.
        // $email_headers = "From: $nameOfCandidate <$email>";
        $email_headers .= "Reply-To: <info@inspiremultimedia.co.in>\r\n"; 
        $email_headers .= "Return-Path: <info@inspiremultimedia.co.in>\r\n"; 
        $email_headers .= "From: $nameOfCandidate <$email>\r\n"; 
        $email_headers .= "Organization: My Organization\r\n"; 
        $email_headers .= "Content-Type: text/plain\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            // http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            // http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
