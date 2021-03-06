@extends('frontend.layouts.app')

@section('content')
	<!-- Content -->
	<div id="content">
		<!-- Section / Home -->
		<section id="home" class="fullheight dark bg-primary">
			<div class="v-center">
				<!-- Section -->
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-push-2">
							<div class="text-center">
								<p> <img class="logo logo-dark animated" data-animation="fadeIn"  src="../assets/img/sixinsixlogo.svg" style="width:70%;" alt="SixInSix"> <br />
								<h3 class="font-secondary animated" data-animation="fadeIn" data-animation="fadeIn" data-animation-delay="100">Digital Growth Agency.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			<div class="v-bottom text-center pb-30 animated" data-animation="fadeInUp" data-animation-delay="200" data-target="local-scroll"> <a href="#what" class="btn btn-default btn-lg" >What is it? <i class="i-after ti-arrow-down"></i></a> </div>
	</div>
	</div>
	</div>
	</section>
	<!--END Header-->

	<!-- Section -->
	<section id="about" class="section-double right">
		<div class="col-md-6 content" animated" data-animation="fadeIn" data-animation-delay="100"">
			<h2>About Us</h2>
			<p class="lead"><strong>SixInSix</strong> is a Digital Growth Agency which helps founders grow their business efficiently.</p>
			<p class="lead">We work closely with our clients to scale their business rapidly, implementing online strategies and processes which will scale and automate the
				all aspects of your business. We want to show you how to work smarter and not harder to reach new benchmarks in your business. </p>
			<div data-target="local-scroll"><a href="#who" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInRight" data-animation-delay="100"><img src="assets/img/process/what.svg" alt=""></div>
		</div>
	</section>
	<!-- Section -->
	<section id="who" class="section-double left">
		<div class="col-md-6 content">
			<h2>Who is it for?</h2>
			<p class="lead">As an Agency, we wanted to make products accessible to all businesses at any stage. Whether you are just beginning or already own a multi-million dollar company, our <a href="#process">processes</a> can be used to help any business hit their desired goals.</p>
			<p class="lead">This is not a 'one size fits all' solution. Everything we do is going to be tailored to <strong>you</strong> and <strong>your business</strong>. We have successfully used these methods and strategies to grow our own companies as well as others, and now we have decided to
				share our knowledge. </p>
			<div data-target="local-scroll"><a href="#start1" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInLeft" data-animation-delay="100"><img src="assets/img/process/who.svg" alt=""></div>
		</div>
	</section>
	<!-- Section -->
	<section id="start1" class="dark bg-primary">
		<div class="container text-center">
			<h2 class="mb-60 animated" data-animation="fadeIn" data-animation-delay="100">What Are You Waiting For?</h2>
			<h4 class=" animated" data-animation="fadeIn" data-animation-delay="100">We would love to meet with you for a <strong>free consultation</strong>.</h4> <br /><br />
			<a class=" animated" data-animation="fadeIn" data-animation-delay="100" href="" onclick="Calendly.showPopupWidget('https://calendly.com/sixinsix/60min');return false;"><button type="button" class="btn btn-default btn-lg"><i class="i-before ti-user"></i>Book Now</button></a> </div>
		<br /><br /><br />
		<div class="v-bottom text-center pb-30 animated" data-animation="fadeInDown" data-animation-delay="200" data-target="local-scroll"> <a href="#process1"><h5>Our Services</h5> <i class="i-after ti-arrow-down"></i></a> </div>
	</section>
	</div>
	<!-- Content / End -->
	<!-- Section -->
	<section id="process1" class="section-double right">
		<div class="col-md-6 content">
			<h2>Audit and Business Analysis</h2>
			<p class="lead">We often find businesses are already sitting on a solution for rapid growth and it's time to activate it. We will test your site and analyse the traffic to understand exactly who your customers
				are.</p>
			<div data-target="local-scroll"><a href="#process2" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInRight" data-animation-delay="100"><img src="../assets/img/process/analysis.svg" alt=""></div>
		</div>
	</section>
	<!-- Section -->
	<section id="process2" class="section-double left">
		<div class="col-md-6 content">
			<h2>Paid and Organic Traffic</h2>
			<p class="lead">Have you ever wondered how businesses grow so quickly online? How people seem to be able to put in minimal budget, yet turn huge profits every time? It’s not luck, it’s a science and we want to show you. </p>
			<p class="lead">In this stage we are going to collect highly valuable data on your business, and use it to create effective online marketing campaigns that actually work. We will be implementing strategies in both paid and organic traffic. This
				will allow you reach the exact target prospect you are looking for, on demand.</p>
			<div data-target="local-scroll"><a href="#process3" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInLeft" data-animation-delay="100"><img src="../assets/img/process/traffic.svg" alt=""></div>
		</div>
	</section>
	</div>
	<!-- Content / End -->
	<!-- Section -->
	<section id="process3" class="section-double right">
		<div class="col-md-6 content">
			<h2>Calculated Scalability </h2>
			<p class="lead">If you knew that every $1 you spent would make $10 back, how much would you spend each day on your business? It’s this kind of knowledge that so many marketers overlook, and very few realise how calculated the online scalability of their business can
				be. </p>
			<p class="lead">This process is all about how to practically print money through advertising. In a few weeks we will know exactly how much one prospect is worth to you, before creating a plan that will allow you to maximise every dollar you spend. </p>
			<div data-target="local-scroll"><a href="#process4" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInRight" data-animation-delay="100"><img src="assets/img/process/scale.svg" alt=""></div>
		</div>
	</section>
	<!-- Section -->
	<section id="process4" class="section-double left">
		<div class="col-md-6 content">
			<h2>Increase Your Conversion Rate</h2>
			<p class="lead">We have the traffic, we have the data and we have a plan.How do you make sure that this converts into actual financial growth in your business? Using Conversion Rate Optimization, we will to track, identify and adjust your website to increase your
				customer conversion rate. Run tests and using real time data to identify exactly where people are going on your website.</p>
			<div data-target="local-scroll"><a href="#process5" class="btn btn-default">Next<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInLeft" data-animation-delay="100"><img src="assets/img/process/convert.svg" alt=""></div>
		</div>
	</section>
	</div>
	<!-- Content / End -->



	<!-- Section -->
	<section id="process5" class="section-double right">
		<div class="col-md-6 content">
			<h2>Using Business Automation to Work Smarter, Not Harder.</h2>
			<p class="lead">So you have reached your targets and making serious money, but you are working long days and can barely keep up with it all. What do you do? You don't have to work harder to earn more. We are going to implement custom automation processes which are
				going to get you working smarter, not harder. Finally you can sit back and watch your business run more efficiently than it ever has.</p>
			<div data-target="local-scroll"><a href="#start2" class="btn btn-default">Get Started<i class="i-after ti-arrow-down"></i></a></div>
		</div>
		<div class="col-md-6 image feature-4 bg-grey text-center">
			<div class="bg-image animated" data-animation="fadeInRight" data-animation-delay="100"><img src="assets/img/process/rank.svg" alt=""></div>
		</div>
	</section>
	<!-- Section -->
	<section id="start2" class="dark bg-primary">
		<div class="container text-center">
			<h2 class="mb-60  animated" data-animation="fadeIn" data-animation-delay="100">So what are you waiting for?</h2>
			<h4 class=" animated" data-animation="fadeIn" data-animation-delay="100"><strong>No, really. We want to know.</strong> Come meet with us for a 60 minute free consultation and let’s have a strategy session.</h4> <br /><br />
			<!-- Calendly link widget begin --><a href="" onclick="Calendly.showPopupWidget('https://calendly.com/sixinsix/60min');return false;"><button type="button" class="btn btn-default btn-lg animated" data-animation="fadeIn" data-animation-delay="100"><i class="i-before ti-user"></i>Book Consultation</button></a> </div>
	</section>
	</div>


@endsection
