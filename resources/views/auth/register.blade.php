@include('layouts.header-auth') 

    <section id="content" class=" wrapper-md animated fadeInUp">
    <style type="text/css">
      
    </style>
<!-- The login Container Codes -->
  <div class="container" style="padding-top: 10px;">
    <section class="m-b-lg">
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
              <div class="panel-heading" style="padding-bottom: 15px;padding-top: 15px;background: transparent;">
                 <a class="navbar-brand block" href="{{ url('/register') }}">
                    <span class="h1 font-bold" style="color: #010164;">
                      <center>
                        <img src="./assets/back_assets/images/logo.jpeg" class="img-responsive">
                      </center>
                    </span>
                </a> 
              </div>
              <div class="panel-body" style="padding-top: 0px;">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#home" data-toggle="tab">As a User</a></li>
                <li class=""><a href="#profile" data-toggle="tab">As Agent</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                  <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                      <div class="stepwizard-step  active">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle active">1</a>
                        <p>Personal info</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Crendentials</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Contact Info</p>
                      </div>
                    </div>
                  </div>

                  <!-- ************************************************************************
                                      The buyer Registration form Section
                  **************************************************************************** -->

                  <form  action="/register_user" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row setup-content" id="step-1">
                      <div class="col-xs-12">
                        <div class="col-md-12">
                          <div class="col-md-8">
                            <div class="form-group{{ $errors->has('referer') ? ' has-error' : '' }}">
                               <input id="referer" type="text" class="form-control input-lg text-left no-border" name="referer" value="{{ old('referer') }}" placeholder="Commission Number" required >

                                  @if ($errors->has('referer'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('referer') }}</strong>
                                      </span>
                                  @endif
                            </div>
                            <div class="form-group{{ $errors->has('referer_name') ? ' has-error' : '' }}">
                               <input id="referer_name" type="text" class="form-control input-lg text-left no-border" name="referer_name" value="{{ old('referer_name') }}" placeholder="Commission Name" disabled="true">

                                  @if ($errors->has('referer_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('referer_name') }}</strong>
                                      </span>
                                  @endif
                            </div>
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                               <input id="fname" type="text" class="form-control input-lg text-left no-border" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required >

                                  @if ($errors->has('first_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('fname') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <div class="col-md-4">
                            <center>
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 120px;">
                                    <img src="assets/back_assets/images/profile_avatar.jpg" alt="Click on the buttom bellow to Upload image" class="img-responsive" style="padding-top: 0px;" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="width: 120px;"></div>
                                <div>
                                  <span class="btn btn-default btn-block  btn-file" style="">
                                      <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select your profile</span>
                                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                      <input type="file" name="profile_pic" class="default" required/>
                                  </span>
                                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                  <i class="fa fa-trash"></i> Remove</a>
                                </div>
                              </div>
                            </center>
                          </div>
                          <button class="btn btn-lg btn-warning nextBtn lt b-white b-2x btn-block btn-rounded" type="button" >Next</button>
                        </div>
                      </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                      <div class="col-xs-12">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                  <input id="last_name" type="text" class="form-control input-lg text-left no-border" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required >

                                  @if ($errors->has('last_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('last_name') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <input id="email" type="email" class="form-control input-lg text-left no-border" name="email" value="{{ old('email') }}" placeholder="Email" required >

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                                   <input id="DOB" class="datepicker-input form-control input-lg no-border text-left" size="16" type="text" name="DOB"  value="10/june/2017" data-date-format="dd/mm/yyyy">

                                  @if ($errors->has('DOB'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('DOB') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <button class="btn btn-lg btn-warning nextBtn lt b-white b-2x btn-block btn-rounded" type="button" >Next</button>
                        </div>
                      </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                      <div class="col-xs-12">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                   <input id="telephone" class="form-control input-lg no-border text-left" size="16" type="text" name="telephone" placeholder="Telephone Number">

                                  @if ($errors->has('telephone'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('telephone') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                   <input id="password" class="form-control input-lg no-border text-left" size="16" type="password" name="password" placeholder="Password">

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                   <input id="password" class="form-control input-lg no-border text-left" size="16" type="password" name="password" placeholder="Confirm Password">

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
                              <i class="icon-arrow-right pull-right"></i>
                                  Create Account
                            </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- ************************************************************************
                                   End of The buyer Registration form Section
                  **************************************************************************** -->
                </div>
                <!-- For Agent Registration-->
                <div class="tab-pane" id="profile">
                  <div class="stepwizard">
                    <div class="stepwizard-row1 setup-panel1">
                      <div class="stepwizard-step">
                        <a href="#step-agent1" type="button" class="btn btn-primary btn-circle active">1</a>
                        <p>Personal info</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-agent2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Crendentials</p>
                      </div>
                      <div class="stepwizard-step">
                        <a href="#step-agent3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Contact Info</p>
                      </div>
                    </div>
                  </div>

                  <!-- ************************************************************************
                                      The buyer Registration form Section
                  **************************************************************************** -->
                  <form  action="/create_agent" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="row setup-content1" id="step-agent1">
                          <div class="col-xs-12">
                            <div class="col-md-6">
                              
                            </div>
                            <div class="col-md-6">
                                
                              </div>
                              <div class="col-md-8">
                                  <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                      <input id="first_name" type="text" class="form-control input-lg text-left no-border" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required >

                                    @if ($errors->has('first_name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('first_name') }}</strong>
                                      </span>
                                    @endif
                                  </div>
                                  <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                      <input id="last_name" type="text" class="form-control input-lg text-left no-border" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required >

                                      @if ($errors->has('last_name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('last_name') }}</strong>
                                          </span>
                                      @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control input-lg text-left no-border" name="email"  placeholder="email"  required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-4">
                                <center>
                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 120px;">
                                        <img src="assets/back_assets/images/profile_avatar.jpg" alt="Click on the buttom bellow to Upload image" class="img-responsive" style="padding-top: 0px;" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="width: 120px;"></div>
                                    <div>
                                      <span class="btn btn-default btn-block  btn-file" style="">
                                          <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select your profile</span>
                                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                          <input type="file" name="profile_pic" class="default" required/>
                                      </span>
                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                      <i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                  </div>
                                </center>
                              </div>
                            <button class="btn btn-lg btn-warning nextBtn lt b-white b-2x btn-block btn-rounded" type="button" >Next</button>
                          </div>
                        </div>
                        <div class="row setup-content1" id="step-agent2">
                          <div class="col-xs-12">
                            
                             <div class="col-md-12">
                                <div class="form-group{{ $errors->has('DOB') ? ' has-error' : '' }}">
                                   <input id="DOB" class="datepicker-input form-control input-lg no-border text-left" size="16" type="text" name="DOB"   data-date-format="dd/mm/yyyy" placeholder="Date of Birth">

                                  @if ($errors->has('DOB'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('DOB') }}</strong>
                                      </span>
                                  @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
                                  <input id="id_number" type="text" class="form-control input-lg text-left no-border" name="id_number"  placeholder="Indentification number"  required>
                                  @if ($errors->has('id_number'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('id_number') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <input id="password" type="password" class="form-control input-lg text-left no-border" name="password"  placeholder="password"  required>
                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                   <input id="password" class="form-control input-lg no-border text-left" size="16" type="password" name="password" placeholder="Confirm Password">

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                            </div>
                          </div>
                            <button class="btn btn-lg btn-warning nextBtn lt b-white b-2x btn-block btn-rounded" type="button" >Next</button>
                        </div>
                      </div>

                      <div class="row setup-content1" id="step-agent3">
                          <div class="col-xs-12">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                    <input id="telephone" type="text" class="form-control input-lg text-left no-border" name="telephone"  placeholder="telephone"  required>
                                    @if ($errors->has('telephone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telephone') }}</strong>
                                       </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-12">
                              <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <input id="#q" type="text" class="form-control input-lg text-left no-border" name="address" value="{{ old('address') }}" placeholder="address" required >

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group{{ $errors->has('next_of_keen') ? ' has-error' : '' }}">
                                    <input id="next_of_keen" type="text" class="form-control input-lg text-left no-border" name="next_of_keen" value="{{ old('next_of_keen') }}" placeholder="Next Of Keen" required >

                                    @if ($errors->has('next_of_keen'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('next_of_keen') }}</strong>
                                        </span>
                                    @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('next_of_keen_tel_number') ? ' has-error' : '' }}">
                                    <input id="next_of_keen_tel_number" type="next_of_keen_tel_number" class="form-control input-lg text-left no-border" name="next_of_keen_tel_number" value="{{ old('next_of_keen_tel_number') }}" placeholder="Next Of keen telephone" required>

                                    @if ($errors->has('next_of_keen_tel_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('next_of_keen_tel_number') }}</strong>
                                        </span>
                                    @endif
                              </div>
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
                              <i class="icon-arrow-right pull-right"></i>
                                  Create Account
                            </button>
                          </div>
                        </div>
                      <div class="line line-dashed"></div>
                  </form>
                  <!-- ************************************************************************
                                 End of The Agent Registration form Section
                  **************************************************************************** -->
                </div>
                <div class="text-center m-t">
                    <a href="{{ url('/login') }}"><small>Click here to Sign In</small></a>
                  </div>
              </div>
      
      <!-- the en of the login Form  -->
      </div>
    </div>
    </div>
    </section>
  </div>
  <!--End of The login Container Codes -->

</section>
@include('layouts.footer-auth')
<script type="text/javascript">

  $('#referer').on('keyup',function(){
    $value=$(this).val();

    var currentRequest = null;    
    currentRequest = $.ajax({
        type : 'get',
        url  : '{{URL::to('search')}}',
        data : {'search':$value},
        cache: false,
        beforeSend : function()    {           
          if(currentRequest != null) {
              currentRequest.abort();
          }
        },
        success:function(data){
            $('#referer_name').val(data);
        } 
    });
  })
</script>