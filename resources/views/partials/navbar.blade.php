  <link rel="stylesheet" href="{{ url('css') }}/nav.css"/>

  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img style="filter: grayscale(85%);" src="{{ url('/img/c40.png') }}"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><strong>OMAHA FIRE DEPARTMENT</strong></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="All Assets"><a href="{{ route('all_assets.index') }}"><i class="fa fa-th fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Stations"><a href="{{ route('stations.index') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Vehicles"><a href="{{ route('vehicles.index') }}"><i class="fa fa-ambulance fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Service"><a href="#"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Grants"><a href="{{ route('grants.index') }}"><i class="fa fa-usd fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Reports"><a href="#"><i class="fa fa-line-chart fa-lg" aria-hidden="true"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Help</a></li>
        <li><a href="{{ route('all_assets.create') }}">Create</a></li>
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Lookup Asset">
          </div>
          <button type="submit" class="btn btn-default" style="margin-right: 15px;"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </ul>
    </div>
  </div>
</nav>