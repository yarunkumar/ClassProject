@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('all_assets.index') }}">Asset</a></li>
        <li class="active">Edit</li>
    </ol>
@endsection

@section('content')

{!! Form::model($all_assets, ['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit New Assest
        
   
    
     @if($all_assets->asset_type=="IPAD")
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
         @if($all_assets->asset_type=="x_series")
@include('assetedit.x_series')
         @endif
         @if($all_assets->asset_type=="unit_radio")
@include('assetedit.unit_radio')
         @endif
         @if($all_assets->asset_type=="cad")
@include('assetedit.cad')
         @endif
         @if($all_assets->asset_type=="trimble_gps")
@include('assetedit.trimble_gps')
         @endif
         @if($all_assets->asset_type=="teamviewer")
@include('assetedit.teamviewer')
         @endif
         @if($all_assets->asset_type=="station")
@include('assetedit.staion')
         @endif
         @if($all_assets->asset_type=="simcard")
@include('assetedit.simcard')
         @endif
         @if($all_assets->asset_type=="printer")
@include('assetedit.printer')
         @endif
         @if($all_assets->asset_type=="portable_radio")
@include('assetedit.portable_radio')
         @endif
         @if($all_assets->asset_type=="person")
@include('assetedit.person')
         @endif
         @if($all_assets->asset_type=="netmotion")
@include('assetedit.netmotion')
         @endif
         @if($all_assets->asset_type=="multi_tech_modem")
@include('assetedit.multi_tech_modem')
         @endif
         @if($all_assets->asset_type=="mobile_computer")
@include('assetedit.mobile_computer')
         @endif
         @if($all_assets->asset_type=="laptop_computer")
@include('assetedit.laptop_computer')
         @endif
         @if($all_assets->asset_type=="inmotion")
@include('assetedit.inmotion')
         @endif
         @if($all_assets->asset_type=="grant")
@include('assetedit.grant')
         @endif
         @if($all_assets->asset_type=="dock")
@include('assetedit.dock')
         @endif
         @if($all_assets->asset_type=="desktop_computer")
@include('assetedit.desktop_computer')
         @endif
         @if($all_assets->asset_type=="")
<p>No Data in Asset Type field</p>
         @endif



        

        


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