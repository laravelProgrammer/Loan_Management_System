<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.css-files')

</head>

<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
            <b>Admin</b>
      </div>
      @if($errors->any())
      <div class="alert alert-danger">
          @foreach ($errors->all() as $item)
          <li>{{$item}}</li>
          @endforeach
      </div>
      @endif
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
    
          <form action="{{ route('password.email')}}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mt-3 mb-1">
            <a href="{{route('login')}}">Login</a>
          </p>
          <p class="mb-0">
            <a href="{{route('register')}}" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->


@include('admin.layouts.js-files')
</body>

</html>