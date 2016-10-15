{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('netmotion_user_id', 'Netmotion User ID *', ['class' => 'control-label']) !!}
            {!! Form::text('netmotion_user_id', old('netmotion_user_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('netmotion_password', 'Netmotion Password', ['class' => 'control-label']) !!}
            {!! Form::text('netmotion_password', old('netmotion_password'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('ip_address', 'IP Address', ['class' => 'control-label']) !!}
            {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('cad_ip_address', 'CAD IP Address', ['class' => 'control-label']) !!}
            {!! Form::text('cad_ip_address', old('cad_ip_address'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}