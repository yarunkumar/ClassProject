{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

<div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_user_id', 'MDC User ID', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_user_id', old('mdc_user_id'), ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_password', 'MDC Password', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_password', old('mdc_password'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('unit', 'Unit *', ['class' => 'control-label']) !!}
        {!! Form::text('unit', old('unit'), ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('unit_agency', 'Unit Agency', ['class' => 'control-label']) !!}
        {!! Form::text('unit_agency', old('unit_agency'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('station_id', 'Assign to', ['class' => 'control-label']) !!}
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