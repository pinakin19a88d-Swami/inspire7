$(document).ready(function(){

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	var bodyHeight = windowHeight * 0.84;
	var footerHeight = windowHeight * 0.14;
	var footerBottomHt = windowHeight * 0.02;
	var gridWidth = (bodyHeight * 0.86) * 1.44;

	var navWidth = $(".navContainer").css("width");
	var contWidth = parseInt(navWidth) + parseInt(gridWidth);
	
	// Main-Container Width Fix
	$(".container").css("width",contWidth);

	$(".bodySection").css("height",bodyHeight);
	$(".footerSection").css("height",footerHeight);
	$(".footerBottom").css("height",footerBottomHt);
	$(".imgGrid").css("width",gridWidth);

	// Sub-Menu Height Fix
	var liHeight = $(".subMenu > li").height();
	var liPadding = (1.2 / liHeight) * 100;
	var totalHeight1 = (liHeight * 5) + (liPadding * 2);
	var totalHeight2 = (liHeight * 8) + (liPadding * 2);
	
	$("#aboutNav").hover(function() {
    		$("#aboutNav > .subMenu").css("height",totalHeight1);
	  	}, 
	  	function() {
	    	$("#aboutNav > .subMenu").css("height","0");
	  	}
	);
	$("#portfolioNav").hover(function() {
    		$("#portfolioNav > .subMenu").css("height",totalHeight2);
	  	}, 
	  	function() {
	    	$("#portfolioNav > .subMenu").css("height","0");
	  	}
	);

	$(window).resize(function(){

		$(".bodySection").css("height",bodyHeight);
		$(".footerSection").css("height",footerHeight);
		$(".imgGrid").css("width",gridWidth);

	});

	var ftBottomWidth = $(".container").css("width");
	$(".footerBottomCont").css("width",ftBottomWidth);

	// toolTip hover fix
	$("#phoneId").hover(function() {
    		$(".toolTip").css("display","block");
    		$(".toolTip").css("opacity","1");
	  	}, 
	  	function() {
	    	$(".toolTip").css("display","none");
	    	$(".toolTip").css("opacity","0");
	  	}
	);
});
