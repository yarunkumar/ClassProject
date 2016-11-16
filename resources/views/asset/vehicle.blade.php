{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}
 
    <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('van', 'OFD VAN #', ['class' => 'control-label']) !!}
                    {!! Form::text('van', old('van'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('van'))
                        <p class="help-block">
                            {{ $errors->first('van') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('Vehicle #', 'Vehicle #', ['class' => 'control-label']) !!}
                    {!! Form::text('vehicle_number', old('vehicle_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vehicle_number'))
                        <p class="help-block">
                             {{ $errors->first('vehicle_number') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
                    {!! Form::text('make', old('make'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('make'))
                        <p class="help-block">
                            {{ $errors->first('make') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
                    {!! Form::text('model', old('model'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('model'))
                        <p class="help-block">
                            {{ $errors->first('model') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('year', 'Year', ['class' => 'control-label']) !!}
                    {!! Form::number('year', old('year'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('year'))
                        <p class="help-block">
                            {{ $errors->first('year') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-6 form-group">
                    {!! Form::label('unittype_id', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::select('unittype_id', $unittypes, old('unittype_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unittype_id'))
                        <p class="help-block">
                            {{ $errors->first('unittype_id') }}
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
                    {!! Form::label('station_id', 'Assign to a station', ['class' => 'control-label']) !!}
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

</div>  
                        {!! Form::open(['method' => 'POST', 'route' => ['related_files.store'], 'files' => true,]) !!}
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('related_file', 'Related File', ['class' => 'control-label']) !!}
                                {!! Form::file('related_file', old('related_file'), ['class' => 'form-control']) !!}
                                {!! Form::hidden('related_file_max_size', 20) !!}
                                <p class="help-block">upto 20mb</p>
                                @if($errors->has('related_file'))
                                    <p class="help-block">
                                        {{ $errors->first('related_file') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('related_image', 'Related Image', ['class' => 'control-label']) !!}
                                {!! Form::file('related_image', old('related_image'), ['class' => 'form-control']) !!}
                                {!! Form::hidden('related_image_max_size', 20) !!}
                                {!! Form::hidden('related_image_max_width', 2500) !!}
                                {!! Form::hidden('related_image_max_height', 2500) !!}
                                <p class="help-block">upto 20mb</p>
                                @if($errors->has('related_image'))
                                    <p class="help-block">
                                        {{ $errors->first('related_image') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
                                {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('comments'))
                                    <p class="help-block">
                                        {{ $errors->first('comments') }}
                                    </p>
                                @endif
                            </div>
                        </div>
<div>
{!! Form::submit('Create',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
<a href="{{ route('vehicles.index') }}" class="btn btn-danger">Cancel</a>
</div>


