@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> Professor / create</h2>
	        </div>
	        <!-- /.col-lg-12 -->
	    	</div>
	    	<!-- /.row -->

	    	<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario Escola</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'escola','method'=>'POST', 'id'=>'frm-insert']) !!}
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('name', 'Nome') !!}
                            {!! Form::text('name', '', ['id'=>'name','class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {{ Form::label('genero', 'Genero',['class'=>'genero']) }}<br>
                                <div class="radio-inline">
                                    {{ Form::radio('genero', 'masculino', true, ['id'=>'optionsRadiosInline1']) }}
                                    {{ Form::label('masculino', 'Masculino') }}
                                </div>
                                <div class="radio-inline">
                                    {{ Form::radio('genero', 'femenino',false, ['id'=>'optionsRadiosInline2']) }}
                                    {{ Form::label('femenino', 'Femenino') }}
                                </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('anosProfessor', 'Anos como Professor') !!}
                            {!! Form::select('anosProfessor',['5 anos ou menos','6-10 anos','11 anos ou mais'],null,['id'=>'anosProfessor','class'=>'form-control anosProfessor', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('implementaRTP', 'Anos a implementar RTP') !!}
                            {!! Form::select('implementaRTP',['0 (novo para RTP)','1 ou menos anos','2-4','5 anos ou mais'],null,['id'=>'implementaRTP','class'=>'form-control implementaRTP', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('formacao', 'Formação') !!}
                            {!! Form::select('formacao',['Primário','Secundário','Universitário','Instituto de formação de professores'],null,['id'=>'formacao','class'=>'form-control formacao', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('outra', 'Outra Formação') !!}
                            {!! Form::text('outraInfo', '', ['id'=>'outraInfo','class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('', '',['class'=>'formExerc']) }}<br>
                                <div class="checkbox-inline">
                                    {{ Form::checkbox('formExerc', 'sim', false, ['id'=>'formExerc']) }}
                                    {{ Form::label('masculino', 'Formação em exercicio') }}
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('formacao', 'Periodo na formação continua de professores CoTT da RTP') !!}
                            <div class="col-md-6">
                                {!! Form::select('formacaoCott',['Formação Fundamental','Aprendizagem baseada nos jogos','Ambientes Positivos para a Aprendizagem'],null,['id'=>'formacao','class'=>'form-control formacao', 'placeholder'=>'Seleciona a formação']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::select('formacaoCott',['Ano Um','Ano Dois','Ano Tres'],null,['id'=>'formacao','class'=>'form-control formacao', 'placeholder'=>'Seleciona o Periodo']) !!}
                            </div>
                        </div>
                    </div>


            </div>
                <div class="panel-footer">{!! Form::submit('Salvar',['class'=>'btn btn-warning']) !!}</div>
            {!! Form::close() !!}
           </div> 
	@endsection