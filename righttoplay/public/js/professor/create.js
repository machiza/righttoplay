$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
});

$('#frm-insert').on('submit', function(e) {
	e.preventDefault();
	var name = $(this).find('#name').val();
	var genero = $(this).find('#masculino').val();
	if($(this).find('#masculino').prop('checked') != true) {
		genero = 'femenino';
	}
	var anosProfessor = $(this).find('#anosProfessor option:selected').text();
	var implementaRTP = $(this).find('#implementaRTP option:selected').text();
	var formacao = $(this).find('#formacao option:selected').text();
	var outraForm = $(this).find('#outraForm').val();
	var formExerc = '(Não)'
	if($(this).find('#formExerc').prop('checked')) {
		var formExerc = '(Sim)';
	}
	var formCottRtp = $(this).find('#formCottRtp option:selected').text();
	var formacaoCottPeriodo = $(this).find('#formacaoCottPeriodo option:selected').text();
	var orientar = 'Sim';
	if ($(this).find('#orientarNao').prop('checked')) {
		var orientar = 'Nao';
	}
	var route = $(this).attr('action');
	var post = $(this).attr('method');

	console.log(orientar);

	$.ajax({
		type : post,
		url  : route,
		dataType: 'json',
		data : {
			'name': name,
			'genero': genero,
			'anosProfessor': anosProfessor,
			'implementaRTP': implementaRTP,
			'formacao': formacao,
			'outraForm': outraForm,
			'formExerc': formExerc,
			'formCottRtp': formCottRtp,
			'formacaoCottPeriodo': formacaoCottPeriodo,
			'orientar': orientar,
		},
		success:function(data) {
			console.log(data);
			$('#frm-insert').trigger('reset');
		}
	});
});