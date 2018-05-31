@extends('frontend.layouts.app')
@section('title', 'Posts')
@section('content')
<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>Blog</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">blog</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<section>

		<div class="container">
			<div class="row">

				<!-- Content -->
				<div class="content col-lg-8 col-lg-push-2 col-md-10 col-md-push-1">
					<!-- Post -->
					<div class="post">
						<div class="post-image">
							<img src="assets/img/posts/post01.jpg" alt="">
						</div>
						<ul class="post-meta">
							<li><span>Added:</span>25 Sep 2016</li>
							<li><span>Author:</span><a href="#">Mark Webber</a></li>
							<li><span>Tags:</span><a href="#">Webdesign</a>, <a href="#">webdevelopment</a></li>
						</ul>
						<div class="post-content">
							<h2>How to organize your work?</h2>
							<p class="lead">Mauris feugiat dolor lorem, id tempus felis porta eu. </p>
							<p>Proin bibendum sodales neque non lobortis. Morbi condimentum eu felis vel auctor. Praesent sed interdum mauris. Ut rutrum volutpat metus ac tristique...</p>
							<a href="#" class="btn btn-filled btn-primary">Read more</a>
						</div>
					</div>
					<!-- Post -->
					<div class="post">
						<div class="post-image">
							<img src="assets/img/posts/post02.jpg" alt="">
						</div>
						<ul class="post-meta">
							<li><span>Added:</span>25 Sep 2016</li>
							<li><span>Author:</span><a href="#">Mark Webber</a></li>
							<li><span>Tags:</span><a href="#">Webdesign</a>, <a href="#">webdevelopment</a></li>
						</ul>
						<div class="post-content">
							<h2>Awesome Seattle Trip</h2>
							<p class="lead">Mauris feugiat dolor lorem, id tempus felis porta eu. </p>
							<p>Proin bibendum sodales neque non lobortis. Morbi condimentum eu felis vel auctor. Praesent sed interdum mauris. Ut rutrum volutpat metus ac tristique...</p>
							<a href="#" class="btn btn-filled btn-primary">Read more</a>
						</div>
					</div>
					<!-- Post -->
					<div class="post">
						<div class="post-image">
							<img src="assets/img/posts/post03.jpg" alt="">
						</div>
						<ul class="post-meta">
							<li><span>Added:</span>25 Sep 2016</li>
							<li><span>Author:</span><a href="#">Mark Webber</a></li>
							<li><span>Tags:</span><a href="#">Webdesign</a>, <a href="#">webdevelopment</a></li>
						</ul>
						<div class="post-content">
							<h2>Adobe Illustrator vs Corel Draw</h2>
							<p class="lead">Mauris feugiat dolor lorem, id tempus felis porta eu. </p>
							<p>Proin bibendum sodales neque non lobortis. Morbi condimentum eu felis vel auctor. Praesent sed interdum mauris. Ut rutrum volutpat metus ac tristique...</p>
							<a href="#" class="btn btn-filled btn-primary">Read more</a>
						</div>
					</div>
					<!-- Pagination -->
					<nav class="text-center">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<i class="ti-arrow-left"></i>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="active"><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<i class="ti-arrow-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>

	</section>

	<section class="bg-secondary dark text-center border-bottom">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3">
					<h2>Whould like to use this template with your next project?</h2>
					<div class="row">
						<div class="col-sm-6"><a href="#" class="btn btn-primary btn-filled btn-block">Yes, want to buy it now!</a></div>
						<div class="col-sm-6"><a href="#" class="btn btn-link btn-block">Check documentation</a></div>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>
<!-- Content / End -->

@endsection
