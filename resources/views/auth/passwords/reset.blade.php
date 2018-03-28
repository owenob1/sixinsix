@extends('layouts.app')

@section('content')

  <!-- Content -->
  <div id="content">
  	<!-- Section -->
  	<section class="bg-black fullheight dark">
  		<div class="bg-image"><img src="../assets/img/photos/classic_bg03.jpg" alt=""></div>
  		<div class="container v-center text-center">
  			<div class="row">
  				<div class="col-lg-4 col-lg-push-4">
  					<div class="bordered-box rounded animated" data-animation="fadeInDown">
  						<h2>{{ __('Reset Password') }}</h2>
  						<form class="validate-form text-center mb-30" method="POST" action="{{ route('password.request') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

  							<div class="form-group mb-10">
  								<label for="email">{{ __('E-Mail Address') }}</label>
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
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="input-2 form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

  							<button type="submit" class="btn btn-filled btn-primary btn-block">{{ __('Reset Password') }}</button>
  						</form>

  					</div>
  				</div>
  			</div>
  		</div>

  	</section>
  </div>
  <!-- Content / End -->

@endsection
