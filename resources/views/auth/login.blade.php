<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Demo App | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="interview demo app by James Singizi" name="description" />
        <meta content="James Singizi" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ url('js/modernizr.min.js') }}"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('/images/login-cover.png');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="{{ url('/') }}" class="text-success">
                                    <span><img src="{{ url('/images/logo.png') }}" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="enter login">

                                         @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <a  href="{{ route('password.request') }}" class="text-muted pull-right"><small>{{ __('Forgot Your Password?') }}</small></a>

                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="enter password">

                                         @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember" style="margin-left: 20px;">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit"> {{ __('Login') }}</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright"> &copy; <?php echo date('Y')?> Demo App</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/popper.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/metisMenu.min.js') }}"></script>
        <script src="{{ url('js/waves.js') }}"></script>
        <script src="{{ url('js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ url('js/jquery.core.js') }}"></script>
        <script src="{{ url('js/jquery.app.js') }}"></script>

    </body>
</html>