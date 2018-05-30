@extends('auth.main')
@section('content')
    <div class="signpanel-wrapper">
        <div class="signbox signup">
            <div class="signbox-header">
                <h4>Sixinsix</h4>
                <p class="mg-b-0">Sign up</p>
            </div><!-- signbox-header -->
            <div class="signbox-body">
                <form action="{{ route('register') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="form-control-label @if($errors->has('email')) text-danger @endif">Email:</label>
                        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Type email address" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div><!-- form-group -->


                    <div class="row row-xs">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if($errors->has('first_name')) text-danger @endif">Firstname:</label>
                                <input type="text" name="first_name" class="form-control  @if($errors->has('first_name')) is-invalid @endif" placeholder="Type firstname" required value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if($errors->has('last_name')) text-danger @endif">Lastname:</label>
                                <input type="text" name="last_name" class="form-control @if($errors->has('last_name')) is-invalid @endif" placeholder="Type lastname" required value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="row row-xs">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if ($errors->has('password')) text-danger @endif">Password:</label>
                                <input type="password" name="password" class="form-control @if ($errors->has('password')) is-invalid @endif" placeholder="Type password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password:</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
                            </div><!-- form-group -->
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="form-group">
                        <label class="form-control-label @if ($errors->has('website')) text-danger @endif">Website:</label>
                        <input type="text" name="website" class="form-control @if ($errors->has('website')) is-invalid @endif" placeholder="Website link" value="{{ old('website') }}" required>
                        @if ($errors->has('website'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('website') }}</strong>
                            </span>
                        @endif
                    </div><!-- form-group -->

                    <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                </form>
                <div class="tx-center bd pd-10 mg-t-40">Already a member? <a href="{{ route('login') }}">Sign In</a></div>
            </div><!-- signbox-body -->
        </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->
@endsection


{{--@extends('platform.layouts.blank')--}}

{{--@section('title', 'Register')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
