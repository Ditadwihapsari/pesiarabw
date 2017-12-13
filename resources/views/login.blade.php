@extends('template.template')

@section('isi')

<!-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
	</div> -->

    <div class="container">
    <div class="col-md-4 col-md-push-4">
    	<br/>
    	<br/>
      <form class="form-signin">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-block" style="background: #F15A23; color: #fff;" type="submit">Sign in</button>

          </div>
      </form>
</div>
    </div> <!-- /container -->
    <br/>
    <br/>
    <br/>
    <br/>
        <br/>
    <br/>
    <br/>
    <br/>
        <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

@endsection