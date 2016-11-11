@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('grants.index') }}">Grants</a></li>
        <li class="active">{{ $grant->grant_name }}</li>
    </ol>
@endsection


@section('content')
    
    {!! Form::model($grant, ['method' => 'PUT', 'route' => ['grants.update', $grant->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Grant
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-3 form-group">
                    {!! Form::label('grant_name', 'Grant Name', ['class' => 'control-label']) !!}
                    {!! Form::text('grant_name', old('grant_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('grant_name'))
                        <p class="help-block">
                            {{ $errors->first('grant_name') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('date_issued', 'Date Issued', ['class' => 'control-label']) !!}
                    {!! Form::text('date_issued', old('date_issued'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_issued'))
                        <p class="help-block">
                            {{ $errors->first('date_issued') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('grant_type', 'Type', ['class' => 'control-label']) !!}
                    {!! Form::text('grant_type', old('grant_type'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('grant_type'))
                        <p class="help-block">
                            {{ $errors->first('grant_type') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-3 form-group">
                    {!! Form::label('date_matures', 'Date Matures', ['class' => 'control-label']) !!}
                    {!! Form::text('date_matures', old('date_matures'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_matures'))
                        <p class="help-block">
                            {{ $errors->first('date_matures') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 form-group">
                    {!! Form::label('grant_value', 'Grant Value', ['class' => 'control-label']) !!}
                    {!! Form::text('grant_value', old('grant_value'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('grant_value'))
                        <p class="help-block">
                            {{ $errors->first('grant_value') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('grant_comments', 'Comments', ['class' => 'control-label']) !!}
                    {!! Form::textarea('grant_comments', old('grant_comments'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('grant_comments'))
                        <p class="help-block">
                            {{ $errors->first('grant_comments') }}
                        </p>
                    @endif
                </div>
            </div>
            
        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}

        <a href="{{ route('grants.index') }}" class="btn btn-default">Cancel</a>


        </div>
    </div>


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