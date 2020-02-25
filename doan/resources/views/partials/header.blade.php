<!-- header -->

<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="/"><img src="{{asset('images/logo3.jpg')}}"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form method="GET" action="/search">
				<div class="search">
					<input type="search" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				@if(Auth::check())
					<li>
						<div class="dropdown">
							<a class="dropdown-toggle use1" type="button" data-toggle="dropdown"></a>
							<ul class="dropdown-menu">
								<li><a href="#">{{Auth::user()->email}}</a></li>
								<li><a data-toggle="modal" data-target="#orangeModalSubscription">Change Password</a></li>
								<li><a id="logout-user">Log Out</a></li>
							</ul>
						</div>
					</li>
					<li><a class="fb" href="https://www.facebook.com/Sample-chat-bot-111148513559842/"></a></li>
					<li><a class="twi" href=""></a></li>
					<li><a class="insta" href="#"></a></li>
					<li><a class="you" href="#"></a></li>
				@else
					<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a></li>
					<li><a class="fb" href="https://www.facebook.com/Sample-chat-bot-111148513559842/"></a></li>
					<li><a class="twi" href="#"></a></li>
					<li><a class="insta" href="#"></a></li>
					<li><a class="you" href="#"></a></li>
				@endif
			</ul>
		</div>
		
		<div class="clearfix"></div>
		
	</div>
</div>





{{-- modal change Password --}}
<div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center changeuser">
	  <h4 class="modal-title white-text w-100 font-weight-bold py-2"><strong>@if(Auth::check()) {{Auth::user()->fullname}} @endif</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="md-form mb-5">
		  <i class="fas fa-user prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form3">Current Password</label>
          <input type="password" name="currentPassword" id="currentPassword" class="form-control validate">
        </div>

        <div class="md-form">
		  <i class="fas fa-envelope prefix grey-text"></i>
		  <label data-error="wrong" data-success="right" for="form2">New Password</label>
          <input type="password" id="newPassword" id="newPassword" class="form-control validate">
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" id="changepass" class="btn btn-warning waves-effect">Change <i class="fas fa-paper-plane-o ml-1"></i></a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

{{-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#orangeModalSubscription">Launch
    modal Subscription</a>
</div> --}}

	  