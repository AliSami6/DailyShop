<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login | Z IT</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
{{--

   <a href="">
            @if(isset($company_information->company_logo))
            <img src="{{asset('uploads/companyLogo/'.$company_information->company_logo)}}" alt=" Admin Logo" class="brand-image" style="border-radius:5px; width:35px">
            @else
                <img src="{{asset('uploads/companyLogo/info-at-zit-bdcom-2022-07-19-.jpeg')}}" height="70px;" width="70px;"/>
            @endif
        </a>

--}}



      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body" style="border-radius: 5px !important">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="{{route('login')}}" method="post">
            @csrf
            <div class="input-group mb-4">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>


             <div class="row">

                <div class="col-7">
              <p class="mb-0 text text-start">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </p>

            </div>
            <div class="col-5">
                <span><button type="submit" class="btn bg-dark text-light btn-block float-right"> {{ __('Log in') }}</button>
                </span>
              <!-- /.col -->
            </div>
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
    </body>
    </html>
