@extends('layouts.admin')
	@section('content')
		<div class="row">
	        <div class="col-lg-12">
	            <h2 class="page-header"> Professor</h2>
	        </div>
	        <!-- /.col-lg-12 -->
	    	</div>
	    	<!-- /.row -->

	    	<div class="row">
	    		<div class="col-lg-12">
	    			<div class="panel panel-default">
	    				<div class="panel-heading">
	    					Tabela Professor
	    				</div>
	    				<div  class="panel-body">
	    					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
	    						<thead>
	    							<tr>
										<th>id</th>
										<th>Name</th>
										<th>Genero</th>
										<th>Anos como professor</th>
										<th>Formacao</th>
										<th>Actions</th>
	    							</tr>
	    						</thead>
								<tbody id="dados">

								</tbody>
	    					</table>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	@endsection

	@section('scripts')
		{!! Html::script('js/professor/read.js') !!}
	@endsection