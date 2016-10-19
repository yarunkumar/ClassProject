{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('grant_id', 'Grant ID *', ['class' => 'control-label']) !!}
            {!! Form::text('grant_id', old('grant_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('date_issued', 'Date Issued', ['class' => 'control-label']) !!}
            {!! Form::text('date_issued', old('date_issued'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('type', 'Type', ['class' => 'control-label']) !!}
            {!! Form::text('type', old('type'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('date_matures', 'Date Matures', ['class' => 'control-label']) !!}
            {!! Form::text('date_matures', old('date_matures'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('grant_value', 'Grant Value', ['class' => 'control-label']) !!}
            {!! Form::text('grant_value', old('grant_value'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}