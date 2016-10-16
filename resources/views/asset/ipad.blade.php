{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
            {!! Form::text('make', old('make'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('seid_number', 'SEID Number', ['class' => 'control-label']) !!}
            {!! Form::text('seid_number', old('seid_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('version', 'Version', ['class' => 'control-label']) !!}
            {!! Form::text('version', old('version'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('emid', 'EMID', ['class' => 'control-label']) !!}
            {!! Form::text('emid', old('emid'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('phone_number', 'Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('ipad_name', 'IPad Name', ['class' => 'control-label']) !!}
            {!! Form::text('ipad_name', old('ipad_name'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}