@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Reminder</li>
  </ol>
@endsection

@section('content')

    {!! Form::model($todo, ['method' => 'PUT', 'route' => ['todos.update', $todo->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Reminder
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
                    {!! Form::label('notepad', 'Notepad', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notepad', old('notepad'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notepad'))
                        <p class="help-block">
                            {{ $errors->first('notepad') }}
                        </p>
                    @endif
                </div>
            </div>
            {!! Form::submit(('Update'), ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/') }}" class="btn btn-default">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>

@stop

