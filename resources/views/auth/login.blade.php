@include('partials.header')
<link rel="stylesheet" href="{{ url('css') }}/login.css"/>

<body>
  <div class="wrapper">

    <form class="form-signin" role="form" method="POST" action="{{ url('login') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div>
        <img src="img/login.png" height="125" width="125" style="display:block; margin: auto;" >
      </div>      
      <h2 class="form-signin-heading" style="text-align:center;">OFD AMS</h2>

      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were problems with input:
        <br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
      <input type="password" class="form-control" name="password" placeholder="Password">

      <label class="checkbox" style="padding-left:20px;">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" > Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #c62828; border: 1px solid #d32f2f;">Login</button>   
    </form>
  </div>
</body>