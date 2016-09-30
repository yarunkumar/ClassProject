@include('partials.header')
@include('partials.navbar')
<div class="sub-nav row" style="margin-top: -25px;">
  <div class="col-md-12">
    <span class="nav-view">@yield('crumbs')</span>
    <span class="nav-user">


    <div class="dropdown">
      <a href="#" style="text-decoration: none; color: white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Welcome, Mickey <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Account</a></li>
        <li><a href="#">Manage</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>
      </ul>
    </div>


    </span>
  </div>
</div>

@if(isset($siteTitle))
    <h3 class="page-title">
        {{ $siteTitle }}
    </h3>
@endif


@if (Session::has('message'))
    <div class="note note-info">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif
@if ($errors->count() > 0)
    <div class="note note-danger">
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@yield('content')

 
@include('partials.javascripts')

@yield('javascript')
@include('partials.footer')


