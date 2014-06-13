$(document).ready(function(){

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	var bodyHeight = windowHeight * 0.84;
	var footerHeight = windowHeight * 0.16;
	var gridWidth = (bodyHeight * 0.86) * 1.44;

	var navWidth = $(".navContainer").css("width");
	var contWidth = parseInt(navWidth) + parseInt(gridWidth);
	$(".container").css("width",contWidth);

	$(".bodySection").css("height",bodyHeight);
	$(".footerSection").css("height",footerHeight);
	$(".imgGrid").css("width",gridWidth);

	

	$(window).resize(function(){

		$(".bodySection").css("height",bodyHeight);
		$(".footerSection").css("height",footerHeight);
		$(".imgGrid").css("width",gridWidth);

	});

});
