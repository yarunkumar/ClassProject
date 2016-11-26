@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('all_assets.index') }}">Assets</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')

{!! Form::model($all_assets, ['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id]]) !!}

    <div class="panel panel-default panel-shadow">
        <div class="panel-heading">
            Edit Asset
        </div>
        <div class="panel-body">
        @if($all_assets->asset_type=="IPad")
@include('assetedit.ipad')
         @endif
         @if($all_assets->asset_type=="HPD")
@include('assetedit.hpd')
         @endif
         @if($all_assets->asset_type=="Computer Monitor")
@include('assetedit.computer_monitor')
         @endif
         @if($all_assets->asset_type=="Desktop Monitor")
@include('assetedit.computer_monitor')
         @endif
         @if($all_assets->asset_type=="X-Series")
@include('assetedit.x_series')
         @endif
         @if($all_assets->asset_type=="Unit Radio")
@include('assetedit.unit_radio')
         @endif
         @if($all_assets->asset_type=="Cad")
@include('assetedit.cad')
         @endif
         @if($all_assets->asset_type=="Trimble GPS Unit")
@include('assetedit.trimble_gps')
         @endif
         @if($all_assets->asset_type=="Team Viewer")
@include('assetedit.teamviewer')
         @endif
         @if($all_assets->asset_type=="station")
@include('assetedit.staion')
         @endif
         @if($all_assets->asset_type=="Sim Card")
@include('assetedit.simcard')
         @endif
         @if($all_assets->asset_type=="Printer")
@include('assetedit.printer')
         @endif
         @if($all_assets->asset_type=="Portable Radio")
@include('assetedit.portable_radio')
         @endif
         @if($all_assets->asset_type=="person")
@include('assetedit.person')
         @endif
         @if($all_assets->asset_type=="Netmotion")
@include('assetedit.netmotion')
         @endif
         @if($all_assets->asset_type=="Multi-Tech Modem")
@include('assetedit.multi_tech_modem')
         @endif
         @if($all_assets->asset_type=="Mobile Computer")
@include('assetedit.mobile_computer')
         @endif
         @if($all_assets->asset_type=="Laptop")
@include('assetedit.laptop_computer')
         @endif
         @if($all_assets->asset_type=="InMotion")
@include('assetedit.inmotion')
         @endif
         @if($all_assets->asset_type=="Dock")
@include('assetedit.dock')
         @endif
         @if($all_assets->asset_type=="Desktop Computer")
@include('assetedit.desktop_computer')
         @endif
         @if($all_assets->asset_type=="")
<p>No Data in Asset Type field</p>
         @endif
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