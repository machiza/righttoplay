@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> Local</h2>
	        </div>
	        <!-- /.col-lg-12 -->
	    	</div>
	    	<!-- /.row -->

	    	<div class="row">
	    		<div class="col-lg-12">
	    			<div class="panel panel-default">
	    				<div class="panel-heading">
	    					Tabela de Locais de Projecto
	    				</div>
	    				<!-- /.panel-heading -->
		    			<div class="panel-body">
		    				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		    					<thead>
	                                    <tr>
	                                        <th>id</th> 
	                                        <th>Name</th>
	                                        <th>Provincia</th>
	                                        <th>Regiao</th>
	                                        <th>Actions</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	@foreach($locais as $key => $d)
	                                		<tr class="odd gradeX id{{ $d->id }}">
	                                			<td>{{ $d->id }}</td>
	                                			<td>{{ $d->name }}</td>
	                                			<td>{{ $d->provincianame }}</td>
	                                			<td>{{ $d->regiao }}</td>
	                                			<td class="center">
                                					<button class="btn btn-success btn-sm" href="#">
			                                        <i class="halflings-icon white zoom-in"></i>  
			                                    	</button>
			                                    	<button value="{{ $d->id }}" class="btn btn-info btn-sm btn-edit" href="#">
			                                        <i class="halflings-icon white edit"></i>  
			                                    	</button>
			                                    	<button value="{{ $d->id }}" class="btn btn-danger btn-sm btn-dell">
			                                        <i class="halflings-icon white trash"></i> 
			                                    	</button>
	                                			</td>
	                                		</tr>
	                                	@endforeach
	                                </tbody>
		    				</table>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	@endsection

	@section('scripts')
        {!! Html::script('js/local/read.js') !!}
    @endsection