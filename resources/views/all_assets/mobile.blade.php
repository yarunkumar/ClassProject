@extends('layouts.app')

@section('content')
    <h3 class="page-title">Mobile Computers</h3>

    {!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Asset Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
                    {!! Form::text('model', old('model'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('model'))
                        <p class="help-block">
                            {{ $errors->first('model') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
                    {!! Form::text('make', old('make'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('make'))
                        <p class="help-block">
                            {{ $errors->first('make') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('manu', 'Manufacturer', ['class' => 'control-label']) !!}
                    {!! Form::text('manu', old('manu'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('manu'))
                        <p class="help-block">
                            {{ $errors->first('manu') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('serial_number', 'Serial Number', ['class' => 'control-label']) !!}
                    {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('serial_number'))
                        <p class="help-block">
                            {{ $errors->first('serial_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_purchased', 'Date Purchased', ['class' => 'control-label']) !!}
                    {!! Form::text('date_purchased', old('date_purchased'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_purchased'))
                        <p class="help-block">
                            {{ $errors->first('date_purchased') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('warranty_date', 'Warranty Date', ['class' => 'control-label']) !!}
                    {!! Form::text('warranty_date', old('warranty_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('warranty_date'))
                        <p class="help-block">
                            {{ $errors->first('warranty_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost', 'Cost', ['class' => 'control-label']) !!}
                    {!! Form::text('cost', old('cost'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost'))
                        <p class="help-block">
                            {{ $errors->first('cost') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mobile_type', 'Mobile Type', ['class' => 'control-label']) !!}
                    {!! Form::text('mobile_type', old('mobile_type'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mobile_type'))
                        <p class="help-block">
                            {{ $errors->first('mobile_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('os', 'Operating System', ['class' => 'control-label']) !!}
                    {!! Form::text('os', old('os'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('os'))
                        <p class="help-block">
                            {{ $errors->first('os') }}
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

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mac', 'MAC #', ['class' => 'control-label']) !!}
                    {!! Form::text('mac', old('mac'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mac'))
                        <p class="help-block">
                            {{ $errors->first('mac') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpu', 'CPU', ['class' => 'control-label']) !!}
                    {!! Form::text('cpu', old('cpu'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpu'))
                        <p class="help-block">
                            {{ $errors->first('cpu') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ram', 'Ram', ['class' => 'control-label']) !!}
                    {!! Form::text('ram', old('ram'), ['class' => 'form-control', 'placeholder' => 'mb']) !!}
                    <p class="help-block">mb</p>
                    @if($errors->has('ram'))
                        <p class="help-block">
                            {{ $errors->first('ram') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('asset_tag', 'Asset Tag #', ['class' => 'control-label']) !!}
                    {!! Form::text('asset_tag', old('asset_tag'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('asset_tag'))
                        <p class="help-block">
                            {{ $errors->first('asset_tag') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('screen_size', 'Screen Size', ['class' => 'control-label']) !!}
                    {!! Form::text('screen_size', old('screen_size'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('screen_size'))
                        <p class="help-block">
                            {{ $errors->first('screen_size') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ac_adapter', 'A/C Adapter', ['class' => 'control-label']) !!}
                    {!! Form::text('ac_adapter', old('ac_adapter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ac_adapter'))
                        <p class="help-block">
                            {{ $errors->first('ac_adapter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vehicle_id', 'Assign to a vehicle', ['class' => 'control-label']) !!}
                    {!! Form::select('vehicle_id', $vehicles, old('vehicle_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vehicle_id'))
                        <p class="help-block">
                            {{ $errors->first('vehicle_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    <a href="{{ route('all_assets.index') }}" class="btn btn-default">Cancel</a>
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>

@stop