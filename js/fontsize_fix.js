$(document).ready(function() {

	var boxWidth = $(".blackBox").width();
	// alert(boxWidth);

	var newFontSize = boxWidth * 0.028;
	$(".infoText h3, h3").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.032;
	$(".infoText h2, h2").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".gradientText").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".infoText p, p").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".infoText .boldItalics").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.018;
	$(".infoText h4, h4").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".subPageLink").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".pdfSection").css("font-size",newFontSize);
});