$(document).ready(function(){

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	var bodyHeight = windowHeight * 0.84;
	var footerHeight = windowHeight * 0.13;
	var footerBottomHt = windowHeight * 0.03;
	var gridWidth = (bodyHeight * 0.86) * 1.44;

	var navWidth = $(".navContainer").css("width");
	var contWidth = parseInt(navWidth) + parseInt(gridWidth);
	
	// Main-Container Width Fix
	$(".container").css("width",contWidth);
	
	$(".bodySection").css("height",bodyHeight);
	$(".footerSection").css("height",footerHeight);
	$(".footerBottom").css("height",footerBottomHt);
	$(".imgGrid").css("width",gridWidth);

	$(".leftBox, .rightBox").css("height",windowHeight);
	$(".leftBox, .rightBox").css("width",contWidth*0.10);

	var ratio = windowWidth / windowHeight;
	if(ratio > 1.4){
		var newOuterCont = contWidth + (contWidth*0.05) + (contWidth*0.05);
		$(".outerContainer").css("width",newOuterCont);
	}
	else if(ratio > 1.32 && ratio < 1.4)
	{
		var newOuterCont = contWidth + (contWidth*0.05);
		$(".outerContainer").css("width",newOuterCont);
	}
	else
	{
		var newOuterCont = contWidth + (contWidth*0.02);
		$(".outerContainer").css("width",newOuterCont);
	}
	

	// Sub-Menu Height Fix
	var liHeight = $(".subMenu > li").height();
	var liPadding = (1.2 / liHeight) * 100;
	var totalHeight1 = (liHeight * 5) + (liPadding * 2);
	var totalHeight2 = (liHeight * 8) + (liPadding * 2);
	
	$("#aboutNav").hover(function() {
    		$("#aboutNav > .subMenu").css("height",totalHeight1);
    		$("#aboutNav > .subMenu").css("opacity","1");
	  	}, 
	  	function() {

	  		if(!$("#aboutNav > .subMenu li a").hasClass("active"))
	  		{
	    		$("#aboutNav > .subMenu").css("height","0");
	    		$("#aboutNav > .subMenu").css("opacity","0");
	    	}
	  	}
	);
	$("#portfolioNav").hover(function() {
    		$("#portfolioNav > .subMenu").css("height",totalHeight2);
    		$("#portfolioNav > .subMenu").css("opacity","1");
	  	}, 
	  	function() {
	  		if(!$("#portfolioNav > .subMenu li a").hasClass("active"))
	  		{
	    		$("#portfolioNav > .subMenu").css("height","0");
	    		$("#portfolioNav > .subMenu").css("opacity","0");
	    	}
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
    		window.setTimeout(function() {  
         		$(".toolTip").css("opacity","1");
			    },
			    10
			);
	  	}, 
	  	function() {
	    	$(".toolTip").css("opacity","0");
	    	window.setTimeout(function() {  
         		$(".toolTip").css("display","none");
			    },
			    100
			);
	  	}
	);

	var newSpritesMargin = ($(".gridContainer").width() - $(".imgGrid").width()) / 2;
	$(".spritesCont").css("margin-right",newSpritesMargin);
});
