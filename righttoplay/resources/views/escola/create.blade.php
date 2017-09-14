@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> Escola / Create</h2>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Nome') !!}
                            {!! Form::text('name', '', ['id'=>'name','class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('implentaRTP', 'Anos de Implementacao das actividades da Righttoplay') !!}
                            {!! Form::select('nivel',['0 (novo ao RTP/Comp)','1 ou menos anos','2-4','5 ou mais'],null,['id'=>'nivel','class'=>'form-control nivel', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('provincia', 'Provincia') !!}
                            {!! Form::select('provincia_id',$provincias,null,['id'=>'provincia_id','class'=>'form-control provincia_id', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('local', 'local') !!}
                            {!! Form::select('local_id',[],null,['id'=>'local_id','class'=>'form-control local_id', 'placeholder'=>'Seleciona']) !!}
                        </div>
                    </div>
            </div>
                <div class="panel-footer">{!! Form::submit('Salvar',['class'=>'btn btn-warning']) !!}</div>
            {!! Form::close() !!}
           </div> 
	@endsection

	@section('scripts')
		{{ Html::script('js/escola/create.js') }}
	@endsection