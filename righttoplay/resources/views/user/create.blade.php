@extends('layouts.admin')
    @section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"> Dashboard</h2>
        </div>
        <!-- /.col-lg-12 -->
    	</div>
    	<!-- /.row -->

    	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Formulario Usuario</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(['url'=>'user','method'=>'POST', 'id'=>'frm-insert']) !!}
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Nome') !!}
                        {!! Form::text('name', '', ['id'=>'name','class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', '',['id'=>'email','class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['id'=>'password','class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('papel', 'Papel') !!}
                        {!! Form::select('role_id',$roles,null,['id'=>'role_id','class'=>'form-control role_id']) !!}
                    </div>
                </div>
        </div>
                <div class="panel-footer">{!! Form::submit('Salvar',['class'=>'btn btn-warning']) !!}</div>
            {!! Form::close() !!}
       </div> 
    @endsection

    @section('scripts')
        {!! Html::script('js/user/create.js') !!}
    @endsection


