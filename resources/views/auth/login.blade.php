<!DOCTYPE html>
<html lang="zxx">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />
	
  <title>{{ config('app.name') }}</title>

  <link rel="shortcut icon" type="image/icon" href="images/favicon-16x16.png"/>
   
  <link  rel="stylesheet" href="css/login-style.css">
  <link  rel="stylesheet" href="css/bootstrap-login.min.css">
  <link  rel="stylesheet" href="css/line-awesome.min.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
 
  </head>
  
  <body>
    <div id="preload-block">
      <div class="square-block"></div>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="wonderlogin-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <div class="col-sm-5 wonderlogin-panel-left">
            <div class="brand-col">
              <div class="headline">
                <div class="brand-logo">
                  <img src="{{asset('admin/images/textlogo.png')}}" width="150" alt="brand-logo">
                </div>
                <p>Login using social media to get quick access</p>
                <div class="row social-buttons">
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-facebook">
                      <i class="la la-facebook"></i> <span class="hidden-xs hidden-sm">Signin with facebook</span>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-twitter">
                      <i class="la la-twitter"></i> <span class="hidden-xs hidden-sm">Signin with twitter</span>
                    </a>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-12">
                    <a href="#" class="btn btn-block btn-google">
                      <i class="la la-google-plus"></i> <span class="hidden-xs hidden-sm">Signin with google</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-7 wonderlogin-panel-right">
            <div class="wonderlogin-login">
              <div class="wonderlogin-panel panel-login text-center active">
                <div class="wonderlogin-heading">
                  <h3 class="auth-title">Login to your account</h3>
                  {{-- <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p> --}}
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <form name="loginForm" class="loginForm" action="{{ route('login') }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <input type="email" class="form-control email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email address">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="form-group">
                        <div class="pwdMask">
                          <input type="password" class="form-control password {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          <span class="la la-eye-slash pwd-toggle"></span>
                        </div>
                      </div>
                      <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                          <label class="checkbox text-left">
                            <input type="checkbox" value="remember-me">
                            <span class="label-text">Remember me</span>
                          </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                          <p class="forgotPwd">
                            {{-- <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a> --}}
                          </p>
                        </div>
                      </div> 
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login with email</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> 
              
            {{-- <div class="wonderlogin-panel panel-forgot">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="wonderlogin-heading">
                      <h3 class="auth-title">Recover your password</h3>
                      <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                    </div>
                    <form name="forgetForm" class="forgetForm" action="#" method="POST">
                      <div class="form-group">
                        <input type="email" class="form-control" name="username" placeholder="Email address">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Recover your password</button>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                      </div>
                      <div class="form-group">
                        <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>  --}}
            </div> 
          </div>
        </div>
      </div> 
    </div> 
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  
  </body>	
</html>
