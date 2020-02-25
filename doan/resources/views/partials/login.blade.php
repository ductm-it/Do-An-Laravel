<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            @if(Session('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                                {{-- <script>
									$('#success').modal('show');
								</script> --}}
                                @php
                                Session::forget('success');
                                @endphp
                            </div>
                            @endif
                            <form>
                                {!! csrf_field() !!}
                                {{-- <input type="hidden" name="redirurl" value="{{ $_SERVER['REQUEST_URI'] }}"> --}}
                                <div class="sign-up">
                                    <h4>UserName :</h4>
                                    <input type="text" id="username" name="username" value="" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = '';}" required="">

                                    @if($errors->has('usernameRegister'))
                                    <span class="text-danger">{{ $errors->first('usernameRegister') }}</span>
                                    @endif

                                    <div id="trunguserRegister" style="color:red; display:none; margin: 0px;">Username
                                        này đã được dùng</div>
                                </div>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" id="email" name="email" value="" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = '';}" required="">
                                    <div id="trungEmailRegister" style="color:red; display:none; margin: 0px;">Email này
                                        đã được dùng</div>
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" id="password" name="password" value=""
                                        onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
                                        required="">

                                </div>

                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" name="repassword" id="repassword" value=""
                                        onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
                                        required="">

                                </div>

                                <div class="sign-up">
                                    <input type="submit" id="btnRegister" value="REGISTER NOW">
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form>
                                {!! csrf_field() !!}
                                {{-- <input type="hidden" name="redirurl" value="{{ $_SERVER['REQUEST_URI'] }}"> --}}
                                <div class="sign-in">
                                    <h4>UserName :</h4>
                                    <input type="text" id="username1" name="username1" value="" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = '';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" id="password1" name="password1" value="" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = '';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox" id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in">
                                    <input  id="btnLogin" type="submit" value="SIGNIN">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                            Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->

<!-- Modal -->
<!-- Button trigger modal -->
<!-- Modal -->

{{--Modal Register success --}}
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title alert alert-success" id="exampleModalLabel">Register Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="window.location='{{ url("/") }}'" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal register fail --}}
<div class="modal fade" id="danger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content panel-warning">
            <div class="modal-header panel-heading">
                <h5 class="modal-title alert alert-danger" id="exampleModalLabel">Register Fails</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Try Again</button>
                {{-- <button type="button" class="btn btn-primary">Try Again</button> --}}
            </div>
        </div>
    </div>
</div>


{{-- Modal login fail --}}
<div class="modal" tabindex="-1" role="dialog" id="login_fail">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-login">
            <div class="modal-header alert alert-danger modal-login-fail">
              <h5 class="modal-title">Invalid username or password</h5>
              <button type="button" class="close btn-login-fail" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>

{{-- Modal login Success --}}
<div id="login_success" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
            <h4 id="welcome"></h4>	
                <br>
				<h4>login successfully.</h4>
				<button class="btn btn-success" onClick="window.location.reload();" data-dismiss="modal"><span>OK !</span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
</div>     


{{-- modal change password success --}}
<div id="change_success" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>				
                    <h4 class="modal-title">
                            Password has changed</h4>	
                </div>
                <div class="modal-body">
                    <p class="text-center">Please back to log in to continue</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" id="logout-user1" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
</div>    

{{-- Modal change password fail --}}
<div class="modal" tabindex="-1" role="dialog" id="change_fail">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-login">
        <div class="modal-header alert alert-danger modal-login-fail">
          <h5 class="modal-title">
            Please check your current password
            </h5>
          <button type="button" class="close btn-login-fail" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>