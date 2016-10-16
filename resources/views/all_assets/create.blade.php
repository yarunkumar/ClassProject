@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('all_assets.index') }}">Asset</a></li>
    <li class="active">Create</li>
  </ol>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create New Assest
        </div>
        <div class="panel-body">
<<<<<<< HEAD
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Asset Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
                    {!! Form::text('model', old('model'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('model'))
                        <p class="help-block">
                            {{ $errors->first('model') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
                    {!! Form::text('make', old('make'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('make'))
                        <p class="help-block">
                            {{ $errors->first('make') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('manu', 'Manufacturer', ['class' => 'control-label']) !!}
                    {!! Form::text('manu', old('manu'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('manu'))
                        <p class="help-block">
                            {{ $errors->first('manu') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('serial_number', 'Serial Number', ['class' => 'control-label']) !!}
                    {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('serial_number'))
                        <p class="help-block">
                            {{ $errors->first('serial_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('model_imei', 'Model IMEI #', ['class' => 'control-label']) !!}
                    {!! Form::text('model_imei', old('model_imei'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('model_imei'))
                        <p class="help-block">
                            {{ $errors->first('model_imei') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date_purchased', 'Date Purchased', ['class' => 'control-label']) !!}
                    {!! Form::text('date_purchased', old('date_purchased'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date_purchased'))
                        <p class="help-block">
                            {{ $errors->first('date_purchased') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('warranty_date', 'Warranty Date', ['class' => 'control-label']) !!}
                    {!! Form::text('warranty_date', old('warranty_date'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('warranty_date'))
                        <p class="help-block">
                            {{ $errors->first('warranty_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cost', 'Cost', ['class' => 'control-label']) !!}
                    {!! Form::text('cost', old('cost'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cost'))
                        <p class="help-block">
                            {{ $errors->first('cost') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('imei', 'IMEI #', ['class' => 'control-label']) !!}
                    {!! Form::text('imei', old('imei'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('imei'))
                        <p class="help-block">
                            {{ $errors->first('imei') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mobile_type', 'Mobile Type', ['class' => 'control-label']) !!}
                    {!! Form::text('mobile_type', old('mobile_type'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mobile_type'))
                        <p class="help-block">
                            {{ $errors->first('mobile_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('os', 'Operating System', ['class' => 'control-label']) !!}
                    {!! Form::text('os', old('os'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('os'))
                        <p class="help-block">
                            {{ $errors->first('os') }}
                        </p>
                    @endif
                </div>
            </div>
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ntm_uid', 'Netmotion User ID', ['class' => 'control-label']) !!}
                    {!! Form::text('ntm_uid', old('ntm_uid'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ntm_uid'))
                        <p class="help-block">
                            {{ $errors->first('ntm_uid') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ntm_pass', 'Netmotion Password', ['class' => 'control-label']) !!}
                    {!! Form::text('ntm_pass', old('ntm_pass'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ntm_pass'))
                        <p class="help-block">
                            {{ $errors->first('ntm_pass') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ip_address', 'IP address', ['class' => 'control-label']) !!}
                    {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ip_address'))
                        <p class="help-block">
                            {{ $errors->first('ip_address') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mac', 'MAC #', ['class' => 'control-label']) !!}
                    {!! Form::text('mac', old('mac'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mac'))
                        <p class="help-block">
                            {{ $errors->first('mac') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cad_ip', 'CAD IP address', ['class' => 'control-label']) !!}
                    {!! Form::text('cad_ip', old('cad_ip'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cad_ip'))
                        <p class="help-block">
                            {{ $errors->first('cad_ip') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sim_id', 'Sim Card ID', ['class' => 'control-label']) !!}
                    {!! Form::text('sim_id', old('sim_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sim_id'))
                        <p class="help-block">
                            {{ $errors->first('sim_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sim_phone', 'Sim Card Phone #', ['class' => 'control-label']) !!}
                    {!! Form::text('sim_phone', old('sim_phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sim_phone'))
                        <p class="help-block">
                            {{ $errors->first('sim_phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('gps_protocol', 'GPS Protocol', ['class' => 'control-label']) !!}
                    {!! Form::text('gps_protocol', old('gps_protocol'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('gps_protocol'))
                        <p class="help-block">
                            {{ $errors->first('gps_protocol') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('firmware_ver', 'Firmware Version', ['class' => 'control-label']) !!}
                    {!! Form::text('firmware_ver', old('firmware_ver'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('firmware_ver'))
                        <p class="help-block">
                            {{ $errors->first('firmware_ver') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('radio_id', 'Radio ID', ['class' => 'control-label']) !!}
                    {!! Form::text('radio_id', old('radio_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('radio_id'))
                        <p class="help-block">
                            {{ $errors->first('radio_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('meid_model_#', 'MEID model #', ['class' => 'control-label']) !!}
                    {!! Form::text('meid_model_#', old('meid_model_#'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('meid_model_#'))
                        <p class="help-block">
                            {{ $errors->first('meid_model_#') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('meid', 'MEID #', ['class' => 'control-label']) !!}
                    {!! Form::text('meid', old('meid'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('meid'))
                        <p class="help-block">
                            {{ $errors->first('meid') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', 'Phone #', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('multi_tech_sim', 'Multi Tech SIM #', ['class' => 'control-label']) !!}
                    {!! Form::text('multi_tech_sim', old('multi_tech_sim'), ['class' => 'form-control', 'placeholder' => 'special']) !!}
                    <p class="help-block">special</p>
                    @if($errors->has('multi_tech_sim'))
                        <p class="help-block">
                            {{ $errors->first('multi_tech_sim') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mdc_id', 'MDC User ID', ['class' => 'control-label']) !!}
                    {!! Form::text('mdc_id', old('mdc_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mdc_id'))
                        <p class="help-block">
                            {{ $errors->first('mdc_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mdc_pass', 'MDC Password', ['class' => 'control-label']) !!}
                    {!! Form::text('mdc_pass', old('mdc_pass'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mdc_pass'))
                        <p class="help-block">
                            {{ $errors->first('mdc_pass') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpu', 'CPU', ['class' => 'control-label']) !!}
                    {!! Form::text('cpu', old('cpu'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpu'))
                        <p class="help-block">
                            {{ $errors->first('cpu') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ram', 'Rram', ['class' => 'control-label']) !!}
                    {!! Form::text('ram', old('ram'), ['class' => 'form-control', 'placeholder' => 'mb']) !!}
                    <p class="help-block">mb</p>
                    @if($errors->has('ram'))
                        <p class="help-block">
                            {{ $errors->first('ram') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('asset_tag', 'Asset Tag #', ['class' => 'control-label']) !!}
                    {!! Form::text('asset_tag', old('asset_tag'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('asset_tag'))
                        <p class="help-block">
                            {{ $errors->first('asset_tag') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('network_status', 'networked', ['class' => 'control-label']) !!}
                    {!! Form::hidden('network_status', 0) !!}
                    {!! Form::checkbox('network_status', 1, false, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('network_status'))
                        <p class="help-block">
                            {{ $errors->first('network_status') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('drop_status', 'Drop Status', ['class' => 'control-label']) !!}
                    {!! Form::text('drop_status', old('drop_status'), ['class' => 'form-control', 'placeholder' => '(network or switch)']) !!}
                    <p class="help-block">(network or switch)</p>
                    @if($errors->has('drop_status'))
                        <p class="help-block">
                            {{ $errors->first('drop_status') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('switch_serial', 'Switch Serial Number', ['class' => 'control-label']) !!}
                    {!! Form::text('switch_serial', old('switch_serial'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('switch_serial'))
                        <p class="help-block">
                            {{ $errors->first('switch_serial') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('screen_size', 'Screen Size', ['class' => 'control-label']) !!}
                    {!! Form::text('screen_size', old('screen_size'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('screen_size'))
                        <p class="help-block">
                            {{ $errors->first('screen_size') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ac_adapter', 'A/C Adapter', ['class' => 'control-label']) !!}
                    {!! Form::text('ac_adapter', old('ac_adapter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ac_adapter'))
                        <p class="help-block">
                            {{ $errors->first('ac_adapter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('stylus', 'Stylus', ['class' => 'control-label']) !!}
                    {!! Form::text('stylus', old('stylus'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('stylus'))
                        <p class="help-block">
                            {{ $errors->first('stylus') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seid_num', 'SEID Number', ['class' => 'control-label']) !!}
                    {!! Form::text('seid_num', old('seid_num'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seid_num'))
                        <p class="help-block">
                            {{ $errors->first('seid_num') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('emid', 'EMID', ['class' => 'control-label']) !!}
                    {!! Form::text('emid', old('emid'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('emid'))
                        <p class="help-block">
                            {{ $errors->first('emid') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tmv_num', 'TeamViewer Number', ['class' => 'control-label']) !!}
                    {!! Form::text('tmv_num', old('tmv_num'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tmv_num'))
                        <p class="help-block">
                            {{ $errors->first('tmv_num') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tmv_alias', 'Teamviewer alias', ['class' => 'control-label']) !!}
                    {!! Form::text('tmv_alias', old('tmv_alias'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tmv_alias'))
                        <p class="help-block">
                            {{ $errors->first('tmv_alias') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('radio_desc', 'Model Description', ['class' => 'control-label']) !!}
                    {!! Form::text('radio_desc', old('radio_desc'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('radio_desc'))
                        <p class="help-block">
                            {{ $errors->first('radio_desc') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tier_level', 'Tier level', ['class' => 'control-label']) !!}
                    {!! Form::text('tier_level', old('tier_level'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tier_level'))
                        <p class="help-block">
                            {{ $errors->first('tier_level') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('system_alias', 'System alias', ['class' => 'control-label']) !!}
                    {!! Form::text('system_alias', old('system_alias'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('system_alias'))
                        <p class="help-block">
                            {{ $errors->first('system_alias') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('system_id', 'System ID Num', ['class' => 'control-label']) !!}
                    {!! Form::text('system_id', old('system_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('system_id'))
                        <p class="help-block">
                            {{ $errors->first('system_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', 'Status', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_id', 'Assign to a station', ['class' => 'control-label']) !!}
                    {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_id'))
                        <p class="help-block">
                            {{ $errors->first('station_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vehicle_id', 'Assign to a vehicle', ['class' => 'control-label']) !!}
                    {!! Form::select('vehicle_id', $vehicles, old('vehicle_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vehicle_id'))
                        <p class="help-block">
                            {{ $errors->first('vehicle_id') }}
                        </p>
                    @endif
                </div>
=======
            <div class="form-group">
              <select class="form-control" id="assets">
                <option selected="selected" disabled="disabled">Select Asset Type</option>
                <option id="1">CAD</option>
                <option id="2">Computer Monitor</option>
                <option id="3">Desktop Computer</option>
                <option id="4">Dock</option>
                <option id="5">Fire Station</option>
                <option id="6">Grant</option>
                <option id="7">HPD</option>
                <option id="8">IPad</option>
                <option id="9">InMotion</option>
                <option id="10">Laptop Computer</option>
                <option id="11">Mobile Computer</option>
                <option id="12">Multi-Tech Modem</option>
                <option id="13">Netmotion</option>
                <option id="14">Person</option>
                <option id="15">Portable Radio</option>
                <option id="16">Printer</option>
                <option id="17">Sim Card</option>
                <option id="18">Teamviewer</option>
                <option id="19">Trimble GPS Unit</option>
                <option id="20">Unit Radio</option>
                <option id="21">Vehicle/Unit</option>
                <option id="22">X-Series</option>
              </select>
>>>>>>> 1ca1865d2a8fb6f796653bdcb35bfeba6ec3f408
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('personnel_id', 'Assign to a person', ['class' => 'control-label']) !!}
                    {!! Form::select('personnel_id', $personnels, old('personnel_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personnel_id'))
                        <p class="help-block">
                            {{ $errors->first('personnel_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('grant_id', 'Assign to a grant', ['class' => 'control-label']) !!}
                    {!! Form::select('grant_id', $grants, old('grant_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('grant_id'))
                        <p class="help-block">
                            {{ $errors->first('grant_id') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default create" id="create-1" hidden>
        <div class="panel-heading">
            Create New CAD
        </div>
        <div class="panel-body">
            @include('asset.cad')
        </div>
    </div>


    <div class="panel panel-default create" id="create-2" hidden>
        <div class="panel-heading">
            Create New Computer Monitor 
        </div>
        <div class="panel-body">
            @include('asset.computer_monitor')
        </div>
    </div>


    <div class="panel panel-default create" id="create-3" hidden>
        <div class="panel-heading">
            Create New Desktop Computer
        </div>
        <div class="panel-body">
            @include('asset.desktop_computer')
        </div>
    </div>

    <div class="panel panel-default create" id="create-4" hidden>
        <div class="panel-heading">
            Create New Dock
        </div>
        <div class="panel-body">
            @include('asset.dock')
        </div>
    </div>

    <div class="panel panel-default create" id="create-5" hidden>
        <div class="panel-heading">
            Create New Fire Station
        </div>
        <div class="panel-body">
            @include('asset.station')
        </div>
    </div>

    <div class="panel panel-default create" id="create-6" hidden>
        <div class="panel-heading">
            Create New Grant
        </div>
        <div class="panel-body">
            @include('asset.grant')
        </div>
    </div>

    <div class="panel panel-default create" id="create-7" hidden>
        <div class="panel-heading">
            Create New HPD
        </div>
        <div class="panel-body">
            @include('asset.hpd')
        </div>
    </div>

    <div class="panel panel-default create" id="create-8" hidden>
        <div class="panel-heading">
            Create New IPad
        </div>
        <div class="panel-body">
            @include('asset.ipad')
        </div>
    </div>

    <div class="panel panel-default create" id="create-9" hidden>
        <div class="panel-heading">
            Create New InMotion
        </div>
        <div class="panel-body">
            @include('asset.inmotion')
        </div>
    </div>

    <div class="panel panel-default create" id="create-10" hidden>
        <div class="panel-heading">
            Create New Laptop Computer
        </div>
        <div class="panel-body">
            @include('asset.laptop_computer')
        </div>
    </div>

    <div class="panel panel-default create" id="create-11" hidden>
        <div class="panel-heading">
            Create New Mobile Computer
        </div>
        <div class="panel-body">
            @include('asset.mobile_computer')
        </div>
    </div>

    <div class="panel panel-default create" id="create-12" hidden>
        <div class="panel-heading">
            Create New Multi-Tech Modem
        </div>
        <div class="panel-body">
            @include('asset.multi_tech_modem')
        </div>
    </div>

    <div class="panel panel-default create" id="create-13" hidden>
        <div class="panel-heading">
            Create New Netmotion
        </div>
        <div class="panel-body">
            @include('asset.netmotion')
        </div>
    </div>

    <div class="panel panel-default create" id="create-14" hidden>
        <div class="panel-heading">
            Create New Person
        </div>
        <div class="panel-body">
            @include('asset.person')
        </div>
    </div>

    <div class="panel panel-default create" id="create-15" hidden>
        <div class="panel-heading">
            Create New Portable Radio
        </div>
        <div class="panel-body">
            @include('asset.portable_radio')
        </div>
    </div>

    <div class="panel panel-default create" id="create-16" hidden>
        <div class="panel-heading">
            Create New Printer
        </div>
        <div class="panel-body">
            @include('asset.printer')
        </div>
    </div>

    <div class="panel panel-default create" id="create-17" hidden>
        <div class="panel-heading">
            Create New Sim Card
        </div>
        <div class="panel-body">
            @include('asset.simcard')
        </div>
    </div>

    <div class="panel panel-default create" id="create-18" hidden>
        <div class="panel-heading">
            Create New Teamviewer
        </div>
        <div class="panel-body">
            @include('asset.teamviewer')
        </div>
    </div>

    <div class="panel panel-default create" id="create-19" hidden>
        <div class="panel-heading">
            Create New Trimble GPS Unit
        </div>
        <div class="panel-body">
            @include('asset.trimble_gps')
        </div>
    </div>

    <div class="panel panel-default create" id="create-20" hidden>
        <div class="panel-heading">
            Create New Unit Radio
        </div>
        <div class="panel-body">
            @include('asset.unit_radio')
        </div>
    </div>

    <div class="panel panel-default create" id="create-21" hidden>
        <div class="panel-heading">
            Create New Vehicle
        </div>
        <div class="panel-body">
            @include('asset.vehicle')
        </div>
    </div>

    <div class="panel panel-default create" id="create-22" hidden>
        <div class="panel-heading">
            Create New X-Series
        </div>
        <div class="panel-body">
            @include('asset.x_series')
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

    <script>
        $("#assets").change(function(){
            $(".create").hide();
            var id = $(this).children(":selected").attr("id");
            $("#create-" + id).fadeIn(400);        
        });
    </script>

@stop