// JavaScript Document
$(document).ready(function(){

/*******Début*******/

/******navigation*******/
	$('#nav a').mouseover( function(){
		//alert('vouvou!');
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
	});

	$('#nav a').mouseleave( function(){
		//alert('vouvou!');
		$(this).css('font-family', '');
		$(this).css('font-size', '');
	});

/******citations******/
	 function cit3(){
		$('#cit3').animate({ 'top' : 0 + '%', 'left' : -80 + '%'}, 3500, 'linear');
	}
	$('#cit1').animate({
		'top' : 42 + '%',
		'left':90 + '%'
	}, 3000, "swing",  function() {
  		$('#cit2').fadeIn(3000);
  		setTimeout(cit3, 3000);
	});

	function citation(){
		$('#citation').fadeOut(3000);
	}

	function pic(){
		$('#pic').animate({'top': -65 +'%', 'left': 15 +'%'}, 2500, 'linear');

	}
	setTimeout(citation,10000);

/*****picture******/
	setTimeout(pic, 10500);

	$('#pic').mouseover(function(){
		$(this).css('border',' black solid 1px');
	});
	$('#pic').mouseleave(function(){
		$(this).css('border','');
	});

/*******scroll + arrow******/
	$(".a_index").click(function() {
		$("html, body").animate({scrollTop: -Math.round($("#presentation").offset().top) + "%"}, 2500);
		//$("html, body").animate({scrollLeft: Math.round($("#acceuil").offset().left) + "px"}, 2000);
	});
	$(".a_pres").click(function() {
		$("html, body").animate({scrollTop: Math.round($("#presentation").offset().top) + "px"}, 2500);
		//$("html, body").animate({scrollLeft: Math.round($("#presentation").offset().left) + "px"}, 2000);
		//$('#presentation').fadeIn('fast');
		//$('#cv').fadeOut('fast');
	});
	$(".a_cv").click(function() {
		$("html, body").animate({scrollTop: Math.round($("#cv").offset().top) + "%"}, 2500);
		//$('#presentation').fadeOut('fast');
		$("#cv").css('display', 'block'); 
	});

/*****nom Harram Fatiha*/
	$('#h2').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.05em');
		$(this).css('color', 'blue');
	});
	$('#h2').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#a_nom').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#a_nom').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#r').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#r').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#r2').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#r2').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});
	$('#a_nom2').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});

	$('#a_nom2').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});
	$('#m').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});

	$('#m').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#f').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#f').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#a1').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#a1').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#t').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#t').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#i').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#i').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#h').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#h').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	$('#a3').mouseover( function(){
		$(this).css('font-family', 'Sketch Rockwell');
		$(this).css('font-size', '1.1em');
		$(this).css('color', 'blue');
	});
	$('#a3').mouseleave( function(){
		$(this).css('font-family', '');
		$(this).css('font-size', '');
		$(this).css('color', '');
	});

	
/*****comment inscription/connection******/
	$('#inscr').click(function(){
		$(this).fadeOut('fast');
		$('#inscription').css('display','none');
		$('#connection').css('display','block');
	});

	

	
/*****fin******/
	

});

	



  

