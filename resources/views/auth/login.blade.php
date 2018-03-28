@extends('layouts.admin')

@section('content')

  <!-- Content -->
  <div id="content">
  	<!-- Section -->
  	<section class="bg-black fullheight dark">
  		<div class="bg-image"><img src="assets/img/photos/classic_bg03.jpg" alt=""></div>
  		<div class="container v-center text-center">
  			<div class="row">
  				<div class="col-lg-4 col-lg-push-4">
  					<div class="bordered-box rounded animated" data-animation="fadeInDown">
  						<h2>Login</h2>
  						<form id="login-form" class="validate-form text-center mb-30" method="POST" action="{{ route('login') }}">
                @csrf
  							<div class="form-group mb-10">
  								<label for="login">{{ __('E-Mail Address') }}</label>
  								<input id="email" name="email" type="email" class="input-2 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
  							<div class="form-group mb-10">
  								<label for="password">{{ __('Password') }}</label>
  								<input id="password" name="password" type="text" class="input-2 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
<div class="form-group mb-10">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
</div>
  							<button type="submit" class="btn btn-filled btn-primary">{{ __('Login') }}</button>
  						</form>
              <a class="link-underline" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
  					</div>
  				</div>
  			</div>
  		</div>

  	</section>
  </div>
  <!-- Content / End -->

@endsection
