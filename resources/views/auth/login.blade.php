@include('layouts.header-auth')

<section id="content" class=" wrapper-md animated fadeInUp">

<!-- The login Container Codes -->
  <div class="container" style="padding-top: 100px;">
    
    <section class="m-b-lg">
      
      <div class="col-md-8 hidden-xs hidden-sm">
        <center>
          <img src="assets/back_assets/images/back_login.png" style="width: 600px;padding-top: 140px;">
        </center>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
              <div class="panel-heading" style="padding-bottom: 15px;padding-top: 15px;background: transparent;">
                <a class="navbar-brand block" href="{{ url('/login') }}">
                 <center>
                    <img src="./assets/back_assets/images/logo.jpeg" class="img-responsive">
                  </center>
                </a> 
              </div>
              <div class="panel-body">
                  <!-- the Beginning of the login Form  -->
                  <form class="form" role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <input id="email" type="email" class="form-control input-lg text-left no-border" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <input id="password" type="password" class="form-control input-lg text-left no-border" name="password" placeholder="Password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                      
                      <div class="form-group">
                          <div class="checkbox i-checks">
                          <label>
                            <input type="checkbox" checked="" name="remember" {{ old('remember') ? 'checked' : '' }}><i></i> Remember Me
                          </label>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
                        <i class="icon-arrow-right pull-right"></i>
                        <span class="m-r-n-lg">Sign in</span>
                      </button>

                      <div class="pull-left m-t m-b">
                        <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                      </div>
                      <div class="pull-right m-t m-b">
                        Do not have an account?<a href="{{ url('/create_users') }}">
                        <small>Signup</small></a>
                      </div>
                      <div class="line line-dashed"></div>
                  </form>
                  <!-- the en of the login Form  -->
              </div>
          </div>
      </div>

    </section>
  </div>
  <!--End of The login Container Codes -->

</section>

@include('layouts.footer-auth')