@extends('layouts.admin')

@section('content')


  <!-- Content -->
  <div id="content">
  	<!-- Section -->
  	<section class="bg-black fullheight dark">
  		<div class="bg-image"><img src="../assets/img/photos/classic_bg03.jpg" alt=""></div>
  		<div class="container v-center text-center">
  			<div class="row">
          <div class="col-lg-8 col-lg-push-2">
  					<div class="bordered-box rounded animated" data-animation="fadeIn">

                <h2>{{ __('Reset Password') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="validate-form text-center mb-30" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group mb-10">
                            <label for="email">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="input-2 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>


                            <div class="form-group mb-10">
                                <button type="submit" class="btn btn-filled btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</section>
@endsection
