$(document).ready(function() {
	$('.we-jit_widget').each(function(i, v){
			var type = $(v).attr('data-wejit-type');
			type = 'wejit_' + type;
			try{
				window[type](v);
			} catch(e){
				console.log(e);
			}
	});
	
});