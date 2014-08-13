<div class="career whiteText clearfix animated fadeIn de8ms">

	<script type="text/javascript" src="js/fontsize_fix.js"></script>
	<link rel="stylesheet" href="css/style.css">

	<div class="infoText">

		<h2 class="animated fadeInDown de1s">Careers</h2>
		<p class="animated fadeInRight de12ms">
			We are looking for young energetic, self-motivated and hardworking candidates for our expansion plans. 
			If you want to be a part of our organisation please fill up the following form or mail your resume at 
			<a href="mailto:info@inspiremultimedia.co.in">info@inspiremultimedia.co.in</a>			
		</p>
		
		<div id="form-messages"></div>
		<form id="ajax-contact" method="post" action="ajax/mailer.php">
		    <div class="field">
		        <label for="name">Name:</label>
		        <input type="text" id="name" name="name" required>
		    </div>

		    <div class="field">
		        <label for="email">Email:</label>
		        <input type="email" id="email" name="email" required>
		    </div>

		    <div class="field">
		        <label for="message">Message:</label>
		        <textarea id="message" name="message" required></textarea>
		    </div>

		    <div class="field">
		        <button type="submit">Send</button>
		    </div>
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