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