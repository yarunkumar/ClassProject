@extends('layouts.app')

@section('content')
    <h3 class="page-title">Station</h3>
    {!! Form::model($station,['method' => 'PUT', 'route' => ['stations.update', $station->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('station_name', old('station_name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_name'))
                        <p class="help-block">
                            {{ $errors->first('station_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_number', 'Number', ['class' => 'control-label']) !!}
                    {!! Form::number('station_number', old('station_number'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_number'))
                        <p class="help-block">
                            {{ $errors->first('station_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_date', 'Date', ['class' => 'control-label']) !!}
                    {!! Form::text('station_date', old('station_date'), ['class' => 'form-control date']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_date'))
                        <p class="help-block">
                            {{ $errors->first('station_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city', 'City', ['class' => 'control-label']) !!}
                    {!! Form::text('city', old('city'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('zipcode', 'Zipcode', ['class' => 'control-label']) !!}
                    {!! Form::number('zipcode', old('zipcode'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('zipcode'))
                        <p class="help-block">
                            {{ $errors->first('zipcode') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('district', 'District', ['class' => 'control-label']) !!}
                    {!! Form::text('district', old('district'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('district'))
                        <p class="help-block">
                            {{ $errors->first('district') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_document', 'Related Document', ['class' => 'control-label']) !!}
                    {!! Form::file('station_document', old('station_document'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('station_document_max_size', 20) !!}
                    <p class="help-block">up to 20mb</p>
                    @if($errors->has('station_document'))
                        <p class="help-block">
                            {{ $errors->first('station_document') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_image', 'Related Photo', ['class' => 'control-label']) !!}
                    {!! Form::file('station_image', old('station_image'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('station_image_max_size', 20) !!}
                    {!! Form::hidden('station_image_max_width', 5000) !!}
                    {!! Form::hidden('station_image_max_height', 5000) !!}
                    <p class="help-block">up to 20mb</p>
                    @if($errors->has('station_image'))
                        <p class="help-block">
                            {{ $errors->first('station_image') }}
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