<div class="career whiteText clearfix animated fadeIn de8ms">

	<script type="text/javascript" src="js/fontsize_fix.js"></script>
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<div class="infoText">

		<h2 class="animated fadeInDown de1s">Careers</h2>
		<p class="animated fadeInRight de12ms">
			We are looking for young energetic, self-motivated and hardworking candidates for our expansion plans. 
			If you want to be a part of our organisation please fill up the following form or mail your resume at 
			<a href="mailto:info@inspiremultimedia.co.in">info@inspiremultimedia.co.in</a>			
		</p>
		
		<div id="form-messages"></div>
		<form id="ajax-contact" class="form-horizontal carrersForm" method="post" action="ajax/mailer.php">
			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="postAppliedFor">Post applying for</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="postAppliedFor" name="postAppliedFor">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="nameOfCandidate">Name of the Candidate</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="nameOfCandidate" name="nameOfCandidate">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="eduQualification">Educational Qualification</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="eduQualification" name="eduQualification">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="areaOfExpertise">Area of Expertise</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="areaOfExpertise" name="areaOfExpertise">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="totalExperience">Total Experience</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="totalExperience" name="totalExperience">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="address">Address</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="address" name="address">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="phoneNumber">Phone Number</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="phoneNumber" name="phoneNumber">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
				<label class="control-label" for="email">Email</label>
				<span>:</span>	    
				<div class="controls">
					<input type="text" id="email" name="email">
				</div><!-- controls -->
			</div><!-- control-group -->

			<div class="control-group animated fadeInRight de16ms">
			    <label class="control-label" for="inputResume">&nbsp;</label>
			    <span style="color:#fff">&nbsp;</span>
			    <div class="controls">
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Reset" name="reset" class="resetBtn">
			    </div><!-- controls -->
			</div><!-- control-group -->

		    <!-- <div class="field">
		        <label for="email">Email:</label>
		        <input type="email" id="email" name="email" required>
		    </div>

		    <div class="field">
		        <label for="message">Message:</label>
		        <textarea id="message" name="message" required></textarea>
		    </div>

		    <div class="field">
		        <button type="submit">Send</button>
		    </div> -->
		</form>
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
	<script src="jquery-2.1.0.min.js"></script>
	<script src="js/app.js"></script>

</div>