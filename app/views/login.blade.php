@extends('layouts.metronic.login')

@section('title')
Login Page
@stop

@section('jumbotron')
<h1>Login Page</h1>
@stop


@section('content')

	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="login" method="post">
		<h3 class="form-title">Welcome</h3>
		
			@if (Session::has('message'))
			<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			{{ Session::get('message') }}
			</div>
			@endif		
		
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text"  placeholder="Email Address" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
		</div>
		<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="social-icon-color facebook" data-original-title="facebook" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color twitter" data-original-title="Twitter" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color googleplus" data-original-title="Goole Plus" href="#"></a>
				</li>
				<li>
					<a class="social-icon-color linkedin" data-original-title="Linkedin" href="#"></a>
				</li>
			</ul>
		</div>
		<div class="create-account">
		<!-- Create New Account-->
		</div>
	</form>
	<!-- END LOGIN FORM -->

@stop
