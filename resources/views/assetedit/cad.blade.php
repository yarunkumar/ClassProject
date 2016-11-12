{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('mdc_id', 'MDC User ID', ['class' => 'control-label']) !!}
            {!! Form::text('mdc_id', old('mdc_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('mdc_pass', 'MDC Password', ['class' => 'control-label']) !!}
            {!! Form::text('mdc_pass', old('mdc_pass'), ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">

        <div class="col-xs-6 form-group">
                {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
                {!! Form::text('comments', old('comments'), ['class' => 'form-control']) !!}
            </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('manu', 'Unit Agency', ['class' => 'control-label']) !!}
            {!! Form::text('manu', old('manu'), ['class' => 'form-control']) !!}
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


        <div class="col-xs-6 form-group">

            {!! Form::label('grant_id', 'Grant', ['class' => 'control-label']) !!}
            {!! Form::select('grant_id[]',$grants, old('grant_id[]'), [
                'id' => 'grants',
                'class' => 'form-control','multiple',

                ]) !!}

            <p class="help-block"></p>
            @if($errors->has('grant_id'))
                <p class="help-block">
                    {{ $errors->first('grant_id') }}
                </p>
            @endif
        </div>

    </div>
    <div class = "row">
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

    
        <div class="col-xs-6 form-group">
                    {!! Form::label('status_id', 'Status', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-6 form-group">
            
            {!! Form::hidden('asset_type', 'Cad', ['class' => 'form-control']) !!}
        </div>
    </div>




{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}