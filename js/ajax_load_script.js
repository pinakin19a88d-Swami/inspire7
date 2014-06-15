$(document).ready(function() {

	$(".subMenu li a").click(function() {
		$(".subMenu li a").removeClass("active");
		$(this).addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});	

	$("#closeBtn").click(function(){
		alert("test");
		$("this").parent().parent().parent(".gridCurtain").hide();
		
	});

});

