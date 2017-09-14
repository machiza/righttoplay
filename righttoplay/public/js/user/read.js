$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
	$('#dataTables-example').DataTable({
        	responsive: true
    	});
});

$(document).on('click','.btn-dell', function(e) {
	var id = $(this).val();

	$.ajax({
		url : 'user/'+id+'',
		type : 'DELETE',
		data : {id:id},
		dataType : 'json',
		success:function(data) {
			$('tbody tr.id'+id).remove();
		}
	});
});

$(document).on('click','.btn-edit',function(e) { 
	var id = $(this).val();

	$.ajax({
		type : 'get',
		url : 'user/'+id+'/edit',
		success:function(data) {
			console.log(data);
			var frmupdate = $('#frm-update');
			frmupdate.find('#id').val(data.id);
			frmupdate.find('#name').val(data.name);
			frmupdate.find('#email').val(data.email);
			frmupdate.find('#role_id').val(data.role_id);
			$('#popup-update').modal('show');
		}
	});
});

$('#frm-update').on('submit',function(e) {
	e.preventDefault();
	var data = $(this).serialize();
	var id = $(this).find('#id').val();
	var url = 'user/'+id+'';

	$.post(url,data,function(data) {
		console.log(data);
		$('#frm-update').trigger('reset');
	});
});