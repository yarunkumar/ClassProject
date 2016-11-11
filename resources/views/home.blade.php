@extends('layouts.app')


@section('crumbs')
  <ol class="breadcrumb">
    <li class="active">Dashboard</li>
  </ol>
@endsection


@section('content')
<div class="row" style="margin: 10px 10px 0px 10px">

<a href="{{ route('all_assets.index') }}">
    <div class="col-md-3">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-th fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Total Assets</h3>
        </div>
      </div>
    </div>
</a>

<a href="{{ route('stations.index') }}">
    <div class="col-md-3">
      <div class="thumbnail stationss">
        <div class="thumbnail-dash">
          <i class="fa fa-home fa-4x" aria-hidden="true"></i>
          
        </div>
        <div class="caption">
          <h3>Stations</h3>
        </div>
      </div>
    </div>
</a>

  <a href="{{ route('vehicles.index') }}">
    <div class="col-md-3">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-ambulance fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Vehicles</h3>
        </div>
      </div>
    </div>
</a>

    <div class="col-md-3">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-wrench fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Service</h3>
        </div>
      </div>
    </div>



</div>





@endsection
