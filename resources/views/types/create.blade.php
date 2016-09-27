@extends('layouts.app')

@section('content')
    <h3 class="page-title">Type</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['types.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('asst_type', 'Asset Type', ['class' => 'control-label']) !!}
                    {!! Form::text('asst_type', old('asst_type'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('asst_type'))
                        <p class="help-block">
                            {{ $errors->first('asst_type') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

