$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
	$('#dataTables-example').DataTable({
		responsive: true
	});

    Carga();
});

function Carga() {
    var tabelaDados = $('#dados');
    var route = 'professor';

    $('#dados').empty();
    $.get(route, function(data) {
        $(data).each(function(key,value) {
            tabelaDados.append("<tr><td>"+value.id+"</d><td>"+value.nome+"</td>"
                +"<td>"+value.genero+"</td>"
                +"<td>"+value.anos_professor+"</td><td>"+value.formacao+"</td>"
                +""
                +"<td class='center'><button class='btn btn-success btn-sm'><i class='halflings-icon white zoom-in'></i></button>"
                +"<button value="+value.id+" class='btn btn-info btn-sm btn-edit'><i class='halflings-icon white edit'></i></button>"
                +"<button value="+value.id+" class='btn btn-danger btn-sm btn-dell'><i class='halflings-icon white trash'></i></button></td></tr>");
        });
    });
}