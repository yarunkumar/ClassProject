{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('team_viewer_number', 'Team Viewer Number', ['class' => 'control-label']) !!}
            {!! Form::text('team_viewer_number', old('team_viewer_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('teamviewer_alias', 'Teamviewer Alias', ['class' => 'control-label']) !!}
            {!! Form::text('teamviewer_alias', old('teamviewer_alias'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('teamviewer_username', 'Username', ['class' => 'control-label']) !!}
            {!! Form::text('teamviewer_username', old('teamviewer_username'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('teamviewer_password', 'Password', ['class' => 'control-label']) !!}
            {!! Form::text('teamviewer_password', old('teamviewer_password'), ['class' => 'form-control']) !!}
        </div>
    </div>
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
    <div class="col-xs-6 form-group">
        {!! Form::label('vehicle_id', 'Assign to a vehicle', ['class' => 'control-label']) !!}
        {!! Form::select('vehicle_id', $vehicles, old('vehicle_id'), ['class' => 'form-control']) !!}
        <p class="help-block"></p>
        @if($errors->has('vehicle_id'))
            <p class="help-block">
                {{ $errors->first('vehicle_id') }}
            </p>
        @endif
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}