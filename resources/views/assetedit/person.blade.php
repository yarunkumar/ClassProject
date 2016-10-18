{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('ofd_id_number', 'OFD ID Number', ['class' => 'control-label']) !!}
            {!! Form::text('ofd_id_number', old('ofd_id_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
            {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('middle_inital', 'Middle Inital', ['class' => 'control-label']) !!}
            {!! Form::text('middle_inital', old('middle_inital'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
            {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}