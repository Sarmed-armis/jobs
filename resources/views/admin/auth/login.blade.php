<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="{{url('admin/images/favicon.ico')}}">
        <title>Login</title>
        <link href="{{url('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="{{ url('admin/js/modernizr.min.js')}}"></script>
    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

            <div class="account-bg">
                <div class="card-box m-b-0">
                    <div class="text-xs-center m-t-20">
                        <span" class="logo">
                            <span>Aljazeera Jobs</span>
                        </span>
                    </div>
                    <div class="m-t-30 m-b-20">
                        <div class="col-xs-12 text-xs-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                        </div>
                        <form class="form-horizontal m-t-20" action="{{ action('interface/login') }}" method="POST">
                          {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <input class="form-control" value="{{ old('email') }}" name="email" type="text" required="" placeholder="email">
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password">

                                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                           <div class="form-group">
                              <div class="col-xs-12 col-md-offset-1">
                             {!! app('captcha')->display(); !!}
                             </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <div class="checkbox checkbox-custom">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script>
            var resizefunc = [];
        </script>
        <script src="{{url('admin/js/jquery.min.js')}}"></script>
        <script src="{{url('admin/js/tether.min.js')}}"></script><!-- Tether for Bootstrap -->
        <script src="{{url('admin/js/bootstrap.min.js')}}"></script>
        <script src="{{url('admin/js/waves.js')}}"></script>
        <script src="{{url('admin/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('admin/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{url('admin/js/jquery.core.js')}}"></script>
        <script src="{{url('admin/js/jquery.app.js')}}"></script>

    </body>
</html>
