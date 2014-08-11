<div class="career whiteText clearfix animated fadeIn de8ms">

	<script type="text/javascript" src="js/fontsize_fix.js"></script>

	<div class="infoText">

		<h2 class="animated fadeInDown de1s">Careers</h2>
		<p class="animated fadeInRight de12ms">
			We are looking for young energetic, self-motivated and hardworking candidates for our expansion plans. 
			If you want to be a part of our organisation please fill up the following form or mail your resume at 
			<a href="mailto:info@inspiremultimedia.co.in">info@inspiremultimedia.co.in</a>			
		</p>
		
		<?php
        if(isset($_POST['email'])) 
        {
            // EDIT THE 2 LINES BELOW AS REQUIRED
         
            $email_to = "chinmay412@gmail.com";
            $email_subject = "Someone wrote about you!";
         
            function died($error) 
            {
                // your error code can go here
         
                echo "<br/><br/>We are very sorry, but there were error(s) found with the form you submitted. ";
                echo "These errors appear below.<br /><br />";
                echo $error."<br /><br />";
                echo "Please go back and fix these errors.<br /><br />";
         
                die();
            }
         
            // validation expected data exists
         
            if(!isset($_POST['first_name']) ||
               !isset($_POST['last_name']) ||
               !isset($_POST['email']) ||
               !isset($_POST['telephone']) ||
               !isset($_POST['comments'])) 
            {
                died('We are sorry, but there appears to be a problem with the form you submitted.');      
            }
         
            $first_name = $_POST['first_name']; // required
            $last_name = $_POST['last_name']; // required
            $email_from = $_POST['email']; // required
            $telephone = $_POST['telephone']; // not required
            $comments = $_POST['comments']; // required
         
            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
         
            if(!preg_match($email_exp,$email_from)) 
            {
                $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
            }
            
            $string_exp = "/^[A-Za-z .'-]+$/";
            
            if(!preg_match($string_exp,$first_name)) 
            {
                $error_message .= 'The First Name you entered does not appear to be valid.<br />';
            }
            
            if(!preg_match($string_exp,$last_name)) 
            {
                $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
            }
            
            if(strlen($comments) < 2) 
            {
                $error_message .= 'The Comments you entered do not appear to be valid.<br />';
            }
            
            if(strlen($error_message) > 0) 
            {
                died($error_message);
            }
         
            $email_message = "Form details below.\n\n";
         
            function clean_string($string) 
            {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
            $email_message .= "First Name: ".clean_string($first_name)."\n";
            $email_message .= "Last Name: ".clean_string($last_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Telephone: ".clean_string($telephone)."\n";
            $email_message .= "Comments: ".clean_string($comments)."\n";
         
            // create email headers
             
            $headers = 'From: '.$email_from."\r\n".
             
            'Reply-To: '.$email_from."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, $email_subject, $email_message, $headers); 
             
            ?>
            <br/><br/>
            Thank you for contacting us. We will be in touch with you very soon.
         
            <?php
             
        }
        else
        {
        ?>
            <br/>
            <br/>
            <form name="contactform" method="post">
                
                <div id="feedback_form">
                    
                    <ul>
                    <li>
<!-- FirstName -->      <label for="first_name">First Name *</label>
                        <input  type="text" name="first_name" maxlength="50" size="30">
                    </li>
                    
                    <li>
<!-- LastName -->       <label for="last_name">Last Name *</label>
                        <input  type="text" name="last_name" maxlength="50" size="30">
                    </li>
                 
                    <li>
<!-- Email -->          <label for="email">Email Address *</label>
                        <input  type="text" name="email" maxlength="80" size="30">
                    </li>
                 
                    <li>
<!-- Telephone -->      <label for="telephone">Telephone Number</label>
                        <input  type="text" name="telephone" maxlength="30" size="30">
                    </li>
                    </ul>
                    
                    <ul>
                    <li>
<!-- Comments -->       <label for="comments" id="commentsLabel">Comments *</label>
                        <textarea  name="comments" maxlength="1000" cols="30" rows="3" id="commentsTextArea"></textarea>
                    </li>
                    
                    <li>
<!-- Sumbit -->         <input type="submit" value="Submit" id="submitButton">
                    </li>
                    </ul>
                 
                </div>
             
            </form>
            <?php
        }
    ?>

	</div><!-- infoText -->

	<script type="text/javascript">
		$(document).ready(function() {
		    $("#submit_btn").click(function() { 
		        //collect input field values
		        var user_post       = $('input[name=inputPost]').val();  //user post
		        var user_name       = $('input[name=inputName]').val();  //user name
		        var user_edu      	= $('input[name=inputEdu]').val(); //user edu
		        var user_expertise 	= $('input[name=inputExpertise]').val(); //user espertise
		        var user_exp 		= $('input[name=inputExp]').val(); //user experience
		        var user_addrs 		= $('textarea[name=inputAddrs]').val(); //user address
		        var user_phone      = $('input[name=inputPhone]').val(); //user phone
		        var user_email      = $('input[name=inputEmail]').val(); //user email
		        
		        //simple validation at client's end
		        //we simply change border color to red if empty field using .css()
		        var proceed = true;
		        if(user_post==""){
		            $('input[name=inputPost]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_name==""){ 
		            $('input[name=inputName]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_edu==""){ 
		            $('input[name=inputEdu]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_expertise==""){ 
		            $('input[name=inputExpertise]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_exp==""){ 
		            $('input[name=inputExp]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_addrs==""){ 
		            $('textarea[name=inputAddrs]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_phone==""){ 
		            $('input[name=inputPhone]').css('border-color','red'); 
		            proceed = false;
		        }
		        if(user_email==""){ 
		            $('input[name=inputEmail]').css('border-color','red'); 
		            proceed = false;
		        }

		        //everything looks good! proceed...
		        if(proceed) 
		        {
		            //data to be sent to server
		            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone};
		            
		            //Ajax post data to server
		            $.post('ajax/emailCareerForm.php', post_data, function(response){  
		                
		                //load json data from server and output message     
		                if(response.type == 'error')
		                {
		                    output = '<div class="error">'+response.text+'</div>';
		                }else{
		                
		                    output = '<div class="success">'+response.text+'</div>';
		                    
		                    //reset values in all input fields
		                    $('#contact_form input').val(''); 
		                    $('#contact_form textarea').val(''); 
		                }
		                
		                $("#result").hide().html(output).slideDown();
		            }, 'json');
		            
		        }
		    });
		    
		    //reset previously set border colors and hide all message on .keyup()
		    $("#contact_form input, #contact_form textarea").keyup(function() { 
		        $("#contact_form input, #contact_form textarea").css('border-color',''); 
		        $("#result").slideUp();
		    });
		    
		});
	</script>

	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript">

		$(".formWrap").mCustomScrollbar({
	        theme:"inset-3",
	        scrollButtons:{ enable: true },
	        keyboard:{ enable: true }
	    });

	</script>

	<script type="text/javascript">

		$(".resetBtn").click(function(){

			$(".controls label").css("display","none");

		});

	</script>

</div>