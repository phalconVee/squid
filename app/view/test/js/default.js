function aj_read(){
	//aj_read
	var url = 'test/aj_read';
	$.get(url, function(o){
		for(var i = 0; i < o.length; i++){
			$('#list_inserts').append('<div>'+o[i].article+'<a class="del" rel="'+o[i].id+'" href="#"> X </a></div>');
		}
		$('.del').on('click', function(){
			del_item = $(this);
			var url = 'test/aj_delete';
			var id = $(this).attr('rel');
			if(confirm('Are you sure?')){
				$.post(url, {'id':id}, function(){
				}, 'json');
				del_item.parent().remove();
			}
		});
			return false; 
	}, 'json');

}


function save_data(){
	//aj_insert
	$('#f_form').submit(function(){
		
		var url = $(this).attr('action');
		var data = $(this).serialize();
		/*if($('#field').val('')){
			$('#c_message').html('fill the empty field');
			return false;
		}*/
		$.post(url, data, function(o){
			$('#list_inserts').append('<div>'+o.article+'<a  class="del" rel="'+o.id+'" href="#"> X </a></div>');
			$('#c_message').html('Post created');
			$('#field').val('');
		}, 'json');
		
		return false;
	});
	
}
/*function delete_data(){
	$('#del').click(function(){
		
	});	
}
*/