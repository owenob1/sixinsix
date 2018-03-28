@extends('layouts.admin')

@section('content')

  <!-- Content -->
  <div id="content">

  	<section class="section-xl pt-100">
  		<div class="container text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
  			<span class="icon icon-xxl animated" data-animation="zoomIn"><i class="ti-check-box text-success"></i></span>
  			<h1 class="text-lg mb-10">Thank you for signing in!</h1>
  			<p class="lead mb-40">Nothing to see just yet, {{ Auth::user()->name }} :)</p>

  			<div class="row">
  				<div class="col-md-3 col-md-push-3">
  					<a href="../" class="btn btn-filled btn-primary btn-block">Go to the home page</a>
  				</div>
  				<div class="col-md-3 col-md-push-3">
  					<a href="mailto:hello@sixinsix.co" class="btn btn-link btn-block">Contact Us</a>
  				</div>
  			</div>

  		</div>
  	</section>

  </div>
  <!-- Content / End -->


@endsection
