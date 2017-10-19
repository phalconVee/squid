$(document).ready(function(){
	$('#sidebar_toggle').click(function(e){
		e.preventDefault();
		//creates the toggle action
		$('#wrapper').toggleClass('min_menu');
	});
	CKEDITOR.replace('editor1');
});
