$(document).ready(function() {

		$(".subMenu li a").click(function() {
		$(".subMenu li a").removeClass("active");
		$(".services span").removeClass("active");
		$(this).addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").removeClass("fadeOut");
		$(".blackBox").removeClass("slideOutLeft");
		$(".gridCurtain").css("display","block");

		window.setTimeout(function() {  
         		$( "#closeBtn" ).addClass("close");
			    },
			    100
			);

		if(!$("#aboutNav > .subMenu li a").hasClass("active"))
  		{
    		$("#aboutNav > .subMenu").css("height","0");
    		$("#aboutNav > .subMenu").css("opacity","0");
    	}

	    if(!$("#portfolioNav > .subMenu li a").hasClass("active"))
  		{
    		$("#portfolioNav > .subMenu").css("height","0");
    		$("#portfolioNav > .subMenu").css("opacity","0");
    	}
	});

		$(".nav-list li a").click(function() {
		var current = $(this).attr("name");
		if(current == "ajax/who_we_are.html")
		{
			$(".subMenu li a").removeClass("active");
			$(".services span").removeClass("active");
			$("#whoWeAreNav").addClass("active");
		}
		else if($(this).hasClass("subMenuFalse"))
		{
			$("#aboutNav > .subMenu").css("height","0");
	    	$("#aboutNav > .subMenu").css("opacity","0");
	    	$(".subMenu li a").removeClass("active");
			$(".services span").removeClass("active");
		}
		$(".blackBox").load(current);
		$(".gridCurtain").removeClass("fadeOut");
		$(".blackBox").removeClass("slideOutLeft");
		$(".gridCurtain").css("display","block");

		window.setTimeout(function() {  
         		$( "#closeBtn" ).addClass("close");
			    },
			    100
			);

		// $("#aboutNav > .subMenu").css("height","0");
	    // $("#aboutNav > .subMenu").css("opacity","0");
	    // $("#portfolioNav > .subMenu").css("height","0");
	    // $("#portfolioNav > .subMenu").css("opacity","0");
	});

		$(".services li a").click(function() {
		$(".services li a").removeClass("active");
		$(".subMenu li a").removeClass("active");
		$(".services span").removeClass("active");
		$(this).children("span").addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").removeClass("fadeOut");
		$(".blackBox").removeClass("slideOutLeft");
		$(".gridCurtain").css("display","block");
		
		window.setTimeout(function() {  
         		$( "#closeBtn" ).addClass("close");
			    },
			    100
			);

		$("#aboutNav > .subMenu").css("height","0");
	    $("#aboutNav > .subMenu").css("opacity","0");
	    $("#portfolioNav > .subMenu").css("height","0");
	    $("#portfolioNav > .subMenu").css("opacity","0");
	});

	

		$("#closeBtn").click(function(){
		$(".subMenu li a").removeClass("active");
		$(".services span").removeClass("active");
		$(".gridCurtain").addClass("fadeOut");
		window.setTimeout(function() {  
         		$(".gridCurtain").css("display","none");
		    },
		    800
		);
		$(".blackBox").addClass("slideOutLeft");

		$(this).removeClass("close");

		$("#aboutNav > .subMenu").css("height","0");
	    $("#aboutNav > .subMenu").css("opacity","0");
	    $("#portfolioNav > .subMenu").css("height","0");
	    $("#portfolioNav > .subMenu").css("opacity","0");

	    $("body #cboxOverlay").remove();
	    $("body #colorbox").remove();

	});

	

});

