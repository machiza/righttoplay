<div class="modal fade" id="popup-update" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="panel-body">
            {!! Form::open(['method'=>'PUT', 'id'=>'frm-update']) !!}
            {!! Form::hidden('id',null,['id'=>'id']) !!}
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
                {!! Form::submit('Update',['class'=>'btn btn-warning']) !!}
             {!! Form::close() !!}
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>