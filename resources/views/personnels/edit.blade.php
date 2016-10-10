@extends('layouts.app')

@section('content')
    <h3 class="page-title">Personnel</h3>
    
    {!! Form::model($personnel, ['method' => 'PUT', 'route' => ['personnels.update', $personnel->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ofd_id', 'OFD ID Number', ['class' => 'control-label']) !!}
                    {!! Form::text('ofd_id', old('ofd_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ofd_id'))
                        <p class="help-block">
                            {{ $errors->first('ofd_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ofd_full_name', 'Full Name', ['class' => 'control-label']) !!}
                    {!! Form::text('ofd_full_name', old('ofd_full_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ofd_full_name'))
                        <p class="help-block">
                            {{ $errors->first('ofd_full_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ofd_email', 'Email', ['class' => 'control-label']) !!}
                    {!! Form::email('ofd_email', old('ofd_email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ofd_email'))
                        <p class="help-block">
                            {{ $errors->first('ofd_email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ofd_phone', 'Phone', ['class' => 'control-label']) !!}
                    {!! Form::text('ofd_phone', old('ofd_phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ofd_phone'))
                        <p class="help-block">
                            {{ $errors->first('ofd_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ofd_role', 'Role', ['class' => 'control-label']) !!}
                    {!! Form::text('ofd_role', old('ofd_role'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ofd_role'))
                        <p class="help-block">
                            {{ $errors->first('ofd_role') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

