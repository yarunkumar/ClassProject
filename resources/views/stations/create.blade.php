@extends('layouts.app')

@section('content')
    <h3 class="page-title"> Station</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['stations.store'], 'files' => true,]) !!}

    <div class="panel">
        <div class="panel-heading">
            Create New Station
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4 form-group">
                    {!! Form::label('station_name', 'Name *', ['class' => 'control-label']) !!}
                    {!! Form::text('station_name', old('station_name'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_name'))
                        <p class="help-block">
                            {{ $errors->first('station_name') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-4 form-group">
                    {!! Form::label('address', 'Address *', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>


                <div class="col-xs-4 form-group">
                    {!! Form::label('station_number', 'Number *', ['class' => 'control-label']) !!}
                    {!! Form::number('station_number', old('station_number'), [
                        'class' => 'form-control',
                        'required' => 'required',
                        'placeholder' => 'required',
                        'max' => 500,
                        'min' => 1,
                        ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_number'))
                        <p class="help-block">
                            {{ $errors->first('station_number') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-4 form-group">
                    {!! Form::label('city', 'City *', ['class' => 'control-label']) !!}
                    {!! Form::text('city', old('city'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-4 form-group">
                    {!! Form::label('station_date', 'Date', ['class' => 'control-label']) !!}
                    {!! Form::text('station_date', old('station_date'), ['class' => 'form-control date']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_date'))
                        <p class="help-block">
                            {{ $errors->first('station_date') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-4 form-group">
                    {!! Form::label('zipcode', 'Zipcode *', ['class' => 'control-label']) !!}
                    {!! Form::number('zipcode', old('zipcode'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('zipcode'))
                        <p class="help-block">
                            {{ $errors->first('zipcode') }}
                        </p>
                    @endif
                </div>

                <div class="col-xs-4 form-group">
                    {!! Form::label('battalion', 'Battalion *', ['class' => 'control-label']) !!}
                    {!! Form::text('district', old('district'), ['class' => 'form-control', 'required' => 'required']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('district'))
                        <p class="help-block">
                            {{ $errors->first('district') }}
                        </p>
                    @endif
                </div>
                {{--<div class="col-xs-4 form-group">--}}
                    {{--{!! Form::label('status_id', 'Status', ['class' => 'control-label']) !!}--}}
                    {{--{!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control']) !!}--}}
                    {{--<p class="help-block"></p>--}}
                    {{--@if($errors->has('status_id'))--}}
                        {{--<p class="help-block">--}}
                            {{--{{ $errors->first('status_id') }}--}}
                        {{--</p>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-4 form-group">--}}
                        {{--{!! Form::label('related_file', 'Related File', ['class' => 'control-label']) !!}--}}
                        {{--{!! Form::file('related_file[]', ['class' => 'form-control','multiple']) !!}--}}
                        {{--{!! Form::hidden('related_file_max_size', 20) !!}--}}
                        {{--<p class="help-block">upto 20mb</p>--}}
                        {{--@if($errors->has('related_file'))--}}
                            {{--<p class="help-block">--}}
                                {{--{{ $errors->first('related_file') }}--}}
                            {{--</p>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-xs-12 form-group">
                    {!! Form::label('related_file', 'Related File', ['class' => 'control-label']) !!}

                    {!! Form::file('related_file', old('related_file'), [
                        'class' => 'form-control','multiple',

                        ]) !!}

                    {!! Form::hidden('related_file_max_size', 20) !!}
                    <p class="help-block">upto 20mb</p>
                    @if($errors->has('related_file'))
                        <p class="help-block">
                            {{ $errors->first('related_file') }}
                        </p>
                    @endif
                </div>
            </div>
            {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
            <a href="{{ route('stations.index') }}" class="btn btn-default">Cancel</a>
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