@extends('layouts.app')

@section('content')
    <h3 class="page-title">Desktop</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
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

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
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