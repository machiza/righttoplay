$(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
});

$('#frm-insert').on('submit',function(e) {
	e.preventDefault();
	var data = $(this).serialize();
	var route = $(this).attr('action');
	var post = $(this).attr('method');

	$.ajax({
		type : post,
		url   : route,
		dataType: 'json',
		data : data,
		success:function(data){
			console.log(data);
			$('#frm-insert').trigger('reset');
		}
	})
})