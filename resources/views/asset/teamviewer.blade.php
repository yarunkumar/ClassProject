{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

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

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}