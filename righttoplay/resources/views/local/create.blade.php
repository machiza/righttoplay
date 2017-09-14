@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> Local / Create</h2>
	        </div>
	        <!-- /.col-lg-12 -->
	    	</div>
	    	<!-- /.row -->

	    	<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario Local</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'local','method'=>'POST', 'id'=>'frm-insert']) !!}
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Nome') !!}
                            {!! Form::text('name', '', ['id'=>'name','class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('provincia', 'Provincia') !!}
                            {!! Form::select('provincia_id',$provincias,null,['id'=>'provincia_id','class'=>'form-control provincia_id']) !!}
                        </div>
                    </div>
            </div>
                <div class="panel-footer">{!! Form::submit('Salvar',['class'=>'btn btn-warning']) !!}</div>
            {!! Form::close() !!}
           </div> 
	@endsection

	@section('scripts')
		{{ Html::script('js/local/create.js') }}
	@endsection