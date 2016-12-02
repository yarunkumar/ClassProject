@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('vendors.index') }}">Vendors</a></li>
    <li class="active">Create</li>
  </ol>
@endsection

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['vendors.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create Vendor
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_name', 'Vendor Name *', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_name', old('vendor_name'), ['class' => 'form-control','placeholder' => 'Required', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_name'))
                        <p class="help-block">
                            {{ $errors->first('vendor_name') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_address', 'Address', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_address', old('vendor_address'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_address'))
                        <p class="help-block">
                            {{ $errors->first('vendor_address') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_web', 'Website', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_web', old('vendor_web'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_web'))
                        <p class="help-block">
                            {{ $errors->first('vendor_web') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_phone', 'Phone', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_phone', old('vendor_phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_phone'))
                        <p class="help-block">
                            {{ $errors->first('vendor_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_fax', 'Fax', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_fax', old('vendor_fax'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_fax'))
                        <p class="help-block">
                            {{ $errors->first('vendor_fax') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_tech_sup', 'Tech Support Phone', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_tech_sup', old('vendor_tech_sup'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_tech_sup'))
                        <p class="help-block">
                            {{ $errors->first('vendor_tech_sup') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_rep', 'Representative Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_rep', old('vendor_rep'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_rep'))
                        <p class="help-block">
                            {{ $errors->first('vendor_rep') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_rep_phone', 'Representative Phone', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_rep_phone', old('vendor_rep_phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_rep_phone'))
                        <p class="help-block">
                            {{ $errors->first('vendor_rep_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_rep_phone_m', 'Representative Phone (Cell)', ['class' => 'control-label']) !!}
                    {!! Form::text('vendor_rep_phone_m', old('vendor_rep_phone_m'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_rep_phone_m'))
                        <p class="help-block">
                            {{ $errors->first('vendor_rep_phone_m') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('vendor_email', 'Representative Email', ['class' => 'control-label']) !!}
                    {!! Form::email('vendor_email', old('vendor_email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vendor_email'))
                        <p class="help-block">
                            {{ $errors->first('vendor_email') }}
                        </p>
                    @endif
                </div>
            </div>

            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
            <a href="{{ route('vendors.index') }}" class="btn btn-default">Cancel</a>
        
        </div>
    </div>

@stop

