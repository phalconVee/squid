$(document).ready(function(){
	$('.delete').click(function(e){
		e.preventDefault;
		var confirm_action = confirm('Are you sure to delete note?');
		if(confirm_action == false){return false;} 
	});
});
function validate_form_data(){
	var title = $("#form_title").val();
	//var title = $('#form_title').val();
	if(title == ""){
		$('#error_message').html('Fill out the blank fields');
		var title_length = title.length;
		alert(title_length);
		return false;
	}else{
		return true;
	}
	
}
