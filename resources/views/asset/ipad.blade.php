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
            {!! Form::label('seid_num', 'SEID Number', ['class' => 'control-label']) !!}
            {!! Form::text('seid_num', old('seid_num'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('firmware_ver', 'Version', ['class' => 'control-label']) !!}
            {!! Form::text('firmware_ver', old('firmware_ver'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('emid', 'EMID', ['class' => 'control-label']) !!}
            {!! Form::text('emid', old('emid'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('phone', 'Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('name', 'IPad Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('station_id', 'Assign to Station', ['class' => 'control-label']) !!}
        {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!}
        <p class="help-block"></p>
        @if($errors->has('station_id'))
            <p class="help-block">
                {{ $errors->first('station_id') }}
            </p>
        @endif
    </div>
    

</div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}