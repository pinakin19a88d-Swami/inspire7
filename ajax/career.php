<div class="career whiteText clearfix animated fadeIn de8ms">

	<script type="text/javascript" src="js/fontsize_fix.js"></script>

	<div class="infoText">
		<h2 class="animated fadeInDown de1s">Careers</h2>
		<p class="animated fadeInRight de12ms">
			We are looking for young energetic, self-motivated and hardworking candidates for our expansion plans. 
			If you want to be a part of our organisation please fill up the following form or mail your resume at 
			<a href="mailto:career@inspiremultimedia.co.in">career@inspiremultimedia.co.in</a>			
		</p>
		<!-- <span class="boldItalics animated fadeInRight de12ms">
			We always treat people the way we want to be treated, with integrity, with fairness and with respect.
		</span> -->

		<div class="formWrap mCustomScrollbar animated fadeIn de14ms">
		<?php
						        
	        if(isset($_POST['email'])) 
	        {
	            // EDIT THE 2 LINES BELOW AS REQUIRED
	         
	            $email_to = "chinmay412@gmail.com";
	            $email_subject = "Inspire Multimedia - Careers Form";
	         
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
	         
	            if(!isset($_POST["inputPost"]) ||
	            	!isset($_POST["inputName"]) ||
	            	!isset($_POST["inputEdu"]) ||
	            	!isset($_POST["inputExpertise"]) ||
	            	!isset($_POST["inputExp"]) ||
	            	!isset($_POST["inputAddrs"]) ||
	            	!isset($_POST["inputPhone"]) ||
	               !isset($_POST["inputEmail"]))
	               // !isset($_POST["inputSalary"]))
	            {
	                died("We are sorry, but there appears to be a problem with the form you submitted.");      
	            }
	         
	            $inputPost = $_POST["inputPost"]; // required
	            $inputName = $_POST["inputName"]; // required
	            $inputEdu = $_POST["inputEdu"]; // required
	            $inputExpertise = $_POST["inputExpertise"]; // required
	            $inputExp = $_POST["inputExp"]; // required
	            $inputAddrs = $_POST["inputAddrs"]; // required
	            $inputPhone = $_POST["inputPhone"]; // required
	            $inputEmail = $_POST["inputEmail"]; // required
	            // $inputSalary = $_POST["inputSalary"]; // required
	         
	            $error_message = "";
	            $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
	         
	            if(!preg_match($email_exp,$inputEmail)) 
	            {
	                $error_message .= "The Email Address you entered does not appear to be valid.<br />";
	            }
	            
	            // $string_exp = "/^[A-Za-z .'-]+$/";
	            $string_exp = "/^[a-zA-Z0-9?$@#()'!,+\-=_:.&€£*%\s]+$/";
				
				if(!preg_match($string_exp,$inputPost)) 
	            {
	                $error_message .= "Post applying for text not valid.<br />";
	            }            
	            if(!preg_match($string_exp,$inputName)) 
	            {
	                $error_message .= "Candidate Name not valid.<br />";
	            }
	            if(!preg_match($string_exp,$inputEdu)) 
	            {
	                $error_message .= "Qualification text not valid.<br />";
	            }
	            if(!preg_match($string_exp,$inputExpertise)) 
	            {
	                $error_message .= "Area Of Expertise text not valid.<br />";
	            }

	            $string_totalExp = "/^[0-9A-Za-z .'-]+$/";
	            if(!preg_match($string_totalExp,$inputExp)) 
	            {
	                $error_message .= "Total Experience text not valid.<br />";
	            }
	            if(!preg_match($string_exp,$inputAddrs)) 
	            {
	                $error_message .= "Address text not valid.<br />";
	            }

	            $number_exp = "/^[0-9.-]/";
	            if(!preg_match($number_exp,$inputPhone)) 
	            {
	                $error_message .= "Phone Number not valid.<br />";
	            }
	            // if(!preg_match($number_exp,$inputSalary)) 
	            // {
	            //     $error_message .= "Salary text not valid.<br />";
	            // }
	            
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
	            
	            $email_message .= "Post applying for : ".clean_string($inputPost)."\n";
	            $email_message .= "Name of the Candidate : ".clean_string($inputName)."\n";
	            $email_message .= "Educational Qualification : ".clean_string($inputEdu)."\n";
	            $email_message .= "Area of Expertise : ".clean_string($inputExpertise)."\n";
	            $email_message .= "Total Experience : ".clean_string($inputExp)."\n";
	            $email_message .= "Address : ".clean_string($inputAddrs)."\n";
	            $email_message .= "Phone Number : ".clean_string($inputPhone)."\n";
	            $email_message .= "Email : ".clean_string($inputEmail)."\n";
	            // $email_message .= "Current Salary (per annum) : ".clean_string($inputSalary)."\n";
	         
	            // create email headers
	             
	            $headers = "From: ".$inputEmail."\r\n".
	             
	            "Reply-To: ".$inputEmail."\r\n" .
	             
	            "X-Mailer: PHP/" . phpversion();
	             
	            @mail($email_to, $email_subject, $email_message, $headers); 
	             
	            ?>
	            <br/><br/>
	            Thank you for contacting us. We will be in touch with you very soon.
	         
	            <?php
	             
	        }
	        else
	        {
	        ?>
			<form method="post" id="career-form" novalidate="novalidate" class="form-horizontal carrersForm">
			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputPost">Post applying for</label>
			    <span>:</span>	    
			    <div class="controls">
			      <input type="text" id="inputPost" name="inputPost">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputName">Name of the Candidate</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputName" name="inputName">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputEdu">Educational Qualification</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputEdu" name="inputEdu">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputExpertise">Area of Expertise</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputExpertise" name="inputExpertise">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputExp">Total Experience</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputExp" name="inputExp">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputAddrs">Address</label>
			    <span>:</span>
			    <div class="controls">
			      <textarea rows="3"  id="inputAddrs" name="inputAddrs"></textarea>
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputPhone">Phone Number</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputPhone" name="inputPhone">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputEmail">Email</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputEmail" name="inputEmail">
			    </div><!-- controls -->
			  </div><!-- control-group -->

			  <!-- <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputSalary">Current Salary (per annum)</label>
			    <span>:</span>
			    <div class="controls">
			      <input type="text" id="inputSalary" name="inputSalary">
			    </div>
			  </div> -->		

			  <div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputResume">&nbsp;</label>
			    <span style="color:#fff">:</span>
			    <div class="controls">
			      <input type="submit" value="Submit" name="submit">
		      	  <input type="reset" value="Reset" name="reset" class="resetBtn">
			    </div><!-- controls -->
			  </div><!-- control-group -->



		</form>
		<?php
	        }
	    ?>
		</div><!-- formWrap -->
	</div><!-- infoText -->

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

	<script>
  
		  // When the browser is ready...
		  $(function() {
		  
		    // Setup form validation on the #register-form element
		    $("#career-form").validate({
		    
		        // Specify the validation rules
		        rules: {
		            inputPost: "required",
		            inputName: "required",
		            inputEdu: "required",
		            inputExpertise: "required",
		            inputExp: "required",
		            inputAddrs: "required",
		            inputPhone: {
		                required: true,
		                digits: true,
		                minlength: 8
		            },
		            inputEmail: {
		                required: true,
		                email: true
		            },
		            inputSalary: {
		                required: true,
		                digits: true
		            }
		        },
		        
		        // Specify the validation error messages
		        messages: {
		            inputPost: "Please enter post you are applying for",
		            inputName: "Please enter your full name",
		            inputEdu: "Please enter your educational qualification",
		            inputExpertise: "Please enter your area of expertise",
		            inputExp: "How much experience do you have",
		            inputAddrs: "Please enter your address",
		            inputPhone: "Please enter a valid phone number (digits only)",
		            inputEmail: "Please enter a valid email address",
		            inputSalary: "Please enter your current salary (per annum)"
		        },
		        
		        submitHandler: function(form) {
		            form.submit();
		        }
		    });

		  });
	  
	  </script>

</div>