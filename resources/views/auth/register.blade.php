
@extends('auth.extension')

@section('content')


<!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" >
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_register-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="{{ asset('/img/logo.png') }}" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">USER REGISTRATION</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
<!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif                
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Name <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" class="required" name="name" value="{{ old('name') }}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Email <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="text" class="required" name="email" value="{{ old('email') }}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Website</label>
                        </div>
                        <div class="vd_input-wrapper" id="website-input-wrapper"> <span class="menu-icon"> <i class="fa fa-globe"></i> </span>
                          <input type="text" class="required"  name="website" value="{{ old('website') }}">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Password <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Password" class="required" name="password" id="password">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Confirm Password <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Password" class="required" name="password_confirmation" id="password_confirmation">
                        </div>
                      </div>
                    </div>
                    <br/>
                    <div class="form-group">
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-green vd_white width-100" type="submit" id="submit-register" name="submit-register">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> Already Have an Account? <br/>
                <a href="{{ url('/auth/login') }}">SIGN IN<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 

@endsection
