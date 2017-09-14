$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('#provincia_id').change(function(e) {
		$.get('/escola/'+$(this).val()+'',function(data,provincia) {
			$("#local_id").empty();
			data.forEach(element => {
				$('#local_id').append(`<option value=${element.id}> ${element.name} </option>`);
			});
		});
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