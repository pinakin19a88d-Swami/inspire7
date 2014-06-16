$(document).ready(function() {

	$(".subMenu li a").click(function() {
		$(".subMenu li a").removeClass("active");
		$(this).addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});	

	$("#closeBtn").click(function(){

		// $(".gridCurtain").removeClass("fadeIn");
		$(".gridCurtain").css("display","none");
		// $(".gridCurtain").addClass("fadeOut");
		
	});

});

