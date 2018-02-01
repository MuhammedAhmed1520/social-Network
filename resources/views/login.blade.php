@extends('layout.master')
@section('title')
    Login
@endsection
@section('css')
    /css/style.css
@endsection
@section('content')
                    

@include('includes.message-block')
<h1>Credit Login Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Credit login form</h2>
			<form action="{{ route('signin') }}" method="post">
				<div class="form-sub-w3">
					<input type="text" name="email" placeholder="E-mail" required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you new ?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<div class="submit-w3l">
                    <input type="submit" value="Login">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Register Form</h3>
											<form action="{{ route('signup') }}" method="post">
												<div class="form-sub-w3ls">
													<input placeholder="User Name" name="username" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Email" name="email" class="mail" type="email" required="">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input placeholder="Password" name="password"  type="password" required="">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
											</div>
											<div class="login-check">
								 			 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
											</div>
										<div class="submit-w3l">
                                            <input type="submit" value="Register">
                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
										</div>
										</form>
					</div>	
				</div>
				
@endsection
