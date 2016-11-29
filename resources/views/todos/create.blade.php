@extends('layouts.app')

@section('content')
    <h3 class="page-title">Create a task</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['todos.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Just do it
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('task', 'Task', ['class' => 'control-label']) !!}
                    {!! Form::text('task', old('task'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('task'))
                        <p class="help-block">
                            {{ $errors->first('task') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notepad', 'notepad', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notepad', old('notepad'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notepad'))
                        <p class="help-block">
                            {{ $errors->first('notepad') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(('save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

