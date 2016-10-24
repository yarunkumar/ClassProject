{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}
<p style="color:red; font-style: italic">* Required<p>
    
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model Number', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('cost', 'Cost', ['class' => 'control-label']) !!}
            {!! Form::text('cost', old('cost'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('screen_size', 'Size', ['class' => 'control-label']) !!}
            {!! Form::text('screen_size', old('screen_size'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('date_purchased', 'Date Purchased', ['class' => 'control-label']) !!}
            {!! Form::text('date_purchased', old('date_purchased'), ['class' => 'form-control']) !!}
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
        

    </div>
    <div class="row">
       
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

    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::hidden('asset_type', 'Computer Monitor', ['class' => 'form-control']) !!}
        </div> 
    </div>

       
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
        {!! Form::textarea('comments', old('comments'), ['class' => 'form-control', 'size' => '30x5']) !!}
    </div>
</div>


{!! Form::submit('Create',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}