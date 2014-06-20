$(document).ready(function() {

	$(".subMenu li a").click(function() {
		$(".subMenu li a").removeClass("active");
		$(this).addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});

	$(".nav-list li a").click(function() {
		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});

	$(".services li a").click(function() {
		$(".services li a").removeClass("active");
		$(this).addClass("active");

		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});

	$(".subPageLink a").click(function() {
		var current = $(this).attr("name");
		$(".blackBox").load(current);
		$(".gridCurtain").css("display","block");
	});

	$("#closeBtn").click(function(){
		$(".gridCurtain").css("display","none");
	});

});

