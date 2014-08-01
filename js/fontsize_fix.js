$(document).ready(function() {

	var boxWidth = $(".blackBox").width();
	// alert(boxWidth);

	var newFontSize = boxWidth * 0.028;
	$(".preTitle h3").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.032;
	$(".mainTitle h2").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".gradientText").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".infoText p").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".infoText h4").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".subPageLink").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".pdfSection").css("font-size",newFontSize);
});