jQuery(function(){

	jQuery('#myCarousel').carousel()	
});

 

jQuery(document).ready(function($){ 

	
	//jQuery( ".date" ).datepicker({ minDate: 0,showButtonPanel: true ,dateFormat:'d M, y'});
	jQuery( "#datepicker" ).datepicker({ minDate: 0 ,dateFormat:'d M, y',onSelect: function(dateText, inst) { 
		jQuery( ".date" ).val(dateText);
	}});
	
});

