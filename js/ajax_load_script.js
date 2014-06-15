$(document).ready(function() {

	$("#whoWeAreNav").click(function() {
		$(".blackBox").load("ajax/who_we_are.html");
		// $("ul > li").removeClass("active");
		// $("#whoWeAreNav").addClass("active");
		$("#whoWeAreNav").css("color","#cc0000");
		$(".gridCurtain").css("display","block");
	});

	$("#whatWeDoNav").click(function() {
		$(".blackBox").load("ajax/what_do_we_do.html");
		// $("ul > li").removeClass("active");
		// $("#whoWeAreNav").addClass("active");
		$("#whatWeDoNav").css("color","#cc0000");
		$(".gridCurtain").css("display","block");
	});

});

