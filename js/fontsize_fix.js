$(document).ready(function() {

	var boxWidth = $(".blackBox").width();
	// alert(boxWidth);

	var newFontSize = boxWidth * 0.028;
	$(".infoText h3, h3").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.032;
	$(".infoText h2, h2").css("font-size",newFontSize);
	$(".infoText h2, h2").css("line-height",newFontSize+1.5+"px");

	var newFontSize = boxWidth * 0.045;
	$(".serviceNav h2").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.020;
	$(".gradientText").css("font-size",newFontSize);

	// var newFontSize = boxWidth * 0.018;
	// $(".infoText p, p").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.020;
	$(".infoText p, .bulletPts li, .activities h4, .form-horizontal, p, .bbc ul li").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.020;
	$(".infoText .boldItalics").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.020;
	$(".infoText h4, h4").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".subPageLink").css("font-size",newFontSize);

	var newFontSize = boxWidth * 0.0193;
	$(".pdfSection").css("font-size",newFontSize);

	var newFontSize = $(".imgGrid").width() * 0.017;
	$(".boxText, .corporateBg ul li a").css("font-size",newFontSize);

	var newFontSize = $(".footerBottom").width() * 0.013;
	$(".services li a").css("font-size",newFontSize);
});