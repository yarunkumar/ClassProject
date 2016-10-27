@extends('layouts.app')

@section('content')
    <h3 class="page-title">Related Files</h3>
    
    {!! Form::model($file, ['method' => 'PUT', 'route' => ['related_files.update', $file->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
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
            {{--<div class="row">--}}
                {{--<div class="col-xs-12 form-group">--}}
                    {{--{!! Form::label('related_image', 'Related Image', ['class' => 'control-label']) !!}--}}
                    {{--{!! Form::file('related_image', old('related_image'), ['class' => 'form-control']) !!}--}}
                    {{--{!! Form::hidden('related_image_max_size', 20) !!}--}}
                    {{--{!! Form::hidden('related_image_max_width', 2500) !!}--}}
                    {{--{!! Form::hidden('related_image_max_height', 2500) !!}--}}
                    {{--<p class="help-block">upto 20mb</p>--}}
                    {{--@if($errors->has('related_image'))--}}
                        {{--<p class="help-block">--}}
                            {{--{{ $errors->first('related_image') }}--}}
                        {{--</p>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}
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
            
        </div>
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

