{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}
{!! Form::hidden('asset_type', 'Multi-Tech Modem', ['class' => 'form-control']) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('meid_model_#', 'MEID Model #', ['class' => 'control-label']) !!}
            {!! Form::text('meid_model_num', old('meid_model_num'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('meid', 'MEID Number', ['class' => 'control-label']) !!}
            {!! Form::text('meid', old('meid'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('phone', 'Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_id', 'Multi-Tech SIM', ['class' => 'control-label']) !!}
            {!! Form::text('sim_id', old('sim_id'), ['class' => 'form-control']) !!}
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
    <div class="row">


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
            {!! Form::label('vendor_id', 'Vendor', ['class' => 'control-label']) !!}
            {!! Form::select('vendor_id', $vendors, old('vendor_id'), ['class' => 'form-control']) !!}
            <p class="help-block"></p>
            @if($errors->has('vendor_id'))
                <p class="help-block">
                    {{ $errors->first('vendor_id') }}
                </p>
            @endif
        </div>

        <div class="col-xs-6 form-group">
            {!! Form::label('grant_id', 'Grant', ['class' => 'control-label']) !!}
            {!! Form::select('grant_id[]', $grants, old('grant_id'), [
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



        <div class="col-xs-6 form-group">
            {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
            {!! Form::textarea('comments', old('comments'), ['class' => 'form-control', 'size' => '30x4']) !!}
        </div>
    </div>

<div>
{!! Form::submit('Create',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
<a href="{{ route('all_assets.index') }}" class="btn btn-danger">Cancel</a>
</div>