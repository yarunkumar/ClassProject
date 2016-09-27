@extends('layouts.app')

@section('content')
    <h3 class="page-title">Mobile Computer</h3>
    {!! Form::model($mobile_computer,['method' => 'PUT', 'route' => ['mobile_computers.update', $mobile_computer->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_model', 'Model', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_model', old('laptop_model'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_model'))
                        <p class="help-block">
                            {{ $errors->first('laptop_model') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_serial', 'Serial number', ['class' => 'control-label']) !!}
                    {!! Form::number('laptop_serial', old('laptop_serial'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_serial'))
                        <p class="help-block">
                            {{ $errors->first('laptop_serial') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_name', old('laptop_name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_name'))
                        <p class="help-block">
                            {{ $errors->first('laptop_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_model_imei', 'Model IMEI #', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_model_imei', old('laptop_model_imei'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_model_imei'))
                        <p class="help-block">
                            {{ $errors->first('laptop_model_imei') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_imei', 'IMEI #', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_imei', old('laptop_imei'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_imei'))
                        <p class="help-block">
                            {{ $errors->first('laptop_imei') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_mobile_type', 'Mobile Type', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_mobile_type', old('laptop_mobile_type'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_mobile_type'))
                        <p class="help-block">
                            {{ $errors->first('laptop_mobile_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_date_purchased', 'Date Purchased', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_date_purchased', old('laptop_date_purchased'), ['class' => 'form-control date']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_date_purchased'))
                        <p class="help-block">
                            {{ $errors->first('laptop_date_purchased') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('laptop_cost', 'Cost', ['class' => 'control-label']) !!}
                    {!! Form::text('laptop_cost', old('laptop_cost'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('laptop_cost'))
                        <p class="help-block">
                            {{ $errors->first('laptop_cost') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('type_id', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::select('type_id', $types, old('type_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('type_id'))
                        <p class="help-block">
                            {{ $errors->first('type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
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