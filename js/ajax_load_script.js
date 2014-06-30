$(document).ready(function() {

	$(".subMenu li a").click(function() {
		$(".subMenu li a").removeClass("active");
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
	});

	$(".nav-list li a").click(function() {
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
	});

	$(".services li a").click(function() {
		$(".services li a").removeClass("active");
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
	});

	// $(".subPageLink a").click(function() {
	// 	var current = $(this).attr("name");
	// 	$(".blackBox").load(current);
	// 	$(".gridCurtain").css("display","block");
	// });

	$("#closeBtn").click(function(){
		$(".subMenu li a").removeClass("active");
		$(".gridCurtain").addClass("fadeOut");
		window.setTimeout(function() {  
         		$(".gridCurtain").css("display","none");
		    },
		    800
		);
		$(".blackBox").addClass("slideOutLeft");

		$(this).removeClass("close");
	});

});

