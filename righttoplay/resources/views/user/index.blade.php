@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> User</h2>
	        </div>
	        <!-- /.col-lg-12 -->
	    	</div>
	    	<!-- /.row -->

	    	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabela de Usuarios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th> 
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $key => $u)
                                    <tr class="odd gradeX id{{ $u->id }}">
                                        <td>{{ $u->id }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->rolename }}</td>
                                        <td class="center">
                                            <button class="btn btn-success btn-sm" href="#">
                                                <i class="halflings-icon white zoom-in"></i>  
                                            </button>
                                            <button value="{{ $u->id }}" class="btn btn-info btn-sm btn-edit" href="#">
                                                <i class="halflings-icon white edit"></i>  
                                            </button>
                                            <button value="{{ $u->id }}" class="btn btn-danger btn-sm btn-dell">
                                                <i class="halflings-icon white trash"></i> 
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @include('user.update')
	@endsection

    @section('scripts')
        {!! Html::script('js/user/read.js') !!}
    @endsection