<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Register </title>

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
{{-- <a href="">
            @if(isset($company_information->company_logo))
            <img src="{{asset('uploads/companyLogo/'.$company_information->company_logo)}}" alt=" Admin Logo" class="brand-image" style="border-radius:5px; width:35px">
            @else
                <img src="{{asset('uploads/companyLogo/info-at-zit-bdcom-2022-07-19-.jpeg')}}" height="70px;" width="70px;"/>
            @endif
        </a>  --}}



      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body" style="border-radius: 5px !important">
          <p class="login-box-msg"> Register </p>
          <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="row mb-3">
                <label for="username " class="col-md-4 col-form-label text-md-end">{{ __('username')}}</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone_no" class="col-md-4 col-form-label text-md-end">{{ __('phone_no') }}</label>

                <div class="col-md-6">
                    <input id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus>

                    @error('phone_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="street_address" class="col-md-4 col-form-label text-md-end">{{ __('street_address') }}</label>

                <div class="col-md-6">
                    <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}" required autocomplete="street_address" autofocus>

                    @error('street_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>





            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
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
