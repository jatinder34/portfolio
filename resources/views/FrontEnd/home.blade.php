@extends('layouts.frontend')
@section('content')
@include('FrontEnd.HeaderAndFooter.navbar')
	<!--  BANNER -->
	<section class="slider-area" id="home">
		<div class="container-fluid">
			<div class="row">
				<div class="owl-carousel main-slider">
					<!-- Single slide 1-->
					<div class="single-slide slide-bg-1" style="background-image: url('./assets/img/banner-image.jpg');">
						<div class="col-md-12">
							<div class="tabel">
								<div class="tabel-cell">
									<div class="slider-content">
										<h3>Freelance Designer</h3>
										<h1>Porta Creative Agency.</h1>
										<a href="#" class="btn btn-transparent">Let's Work Together</a>
										<a href="#" class="btn btn-white">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.single-slide -->

					<!-- Single slide 2 -->
					<div class="single-slide slide-bg-2"  style="background-image: url('./assets/img/banner-image-1.jpg');">
						<div class="col-md-12">
							<div class="tabel">
								<div class="tabel-cell">
									<div class="slider-content">
										<h3>Freelance Developer</h3>
										<h1>Digital Design Agency.</h1>
										<a href="#" class="btn btn-transparent">Let's Work Together</a>
										<a href="#" class="btn btn-white">About Us</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.single-slide -->

				</div><!-- /.main-slider -->
			</div>
		</div>
	</section>

	<!-- ABOUT US -->

	<section id="about">
		<div class="container">
			<h2>About Us</h2>
			<div class="row">
				<div class="col-lg-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="about-img">
						<img src="{{ URL::asset('assets/img/jatin.JPG') }}" class="img-fluid" alt="about">
					</div>
				</div>
				<div class="col-lg-6 about-content wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<p>Credibly evisculate top-line synergy rather than resource sucking collaboration and idea-sharing.</p>
					<div class="skills">
						<span class="skill">Design</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 90%;">
								<span>90%</span>
							</div>
						</div>
						<span class="skill">Development</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 85%;">
								<span>85%</span>
							</div>
						</div>
						<span class="skill">JQuery</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 90%;">
								<span>90%</span>
							</div>
						</div>
						<span class="skill">Photography</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 80%;">
								<span>80%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  FEATURES -->

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="feature-box">
						<span class="lnr lnr-rocket"></span>
						<h4>Creative Design</h4>
						<p>We work systematically to integrate corporate responsibility in our core.</p>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="feature-box">
						<span class="lnr lnr-laptop-phone"></span>
						<h4>Unique Layouts</h4>
						<p>We work systematically to integrate corporate responsibility in our core.</p>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="feature-box">
						<span class="lnr lnr-bubble"></span>
						<h4>24/7 Support</h4>
						<p>We work systematically to integrate corporate responsibility in our core.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  PORTFOLIO -->

	<section id="portfolio">
		<div class="svg-wave">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
				<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
			</svg>
		</div>
		<div class="container-fluid wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
			<h2>Our Portfolio</h2>
			<div class="row">
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="1">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-1" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="2">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-2" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="3">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-3" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="4">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-4" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="5">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-5" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="https://via.placeholder.com/680x727" alt="6">
					</div>
					<div class="item-info">
						<h3 class="heading-3">Portfolio Item</h3>
						<p class="p-text">This handy tool helps you create dummy text for all your layout needs.</p>
						<a href="https://via.placeholder.com/680x727" data-lightbox="image-6" data-title="Portfolio Item" class="link-text">Full VIew</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--  CALL TO ACTION -->

	<section id="call-to-action">
		<div class="container">
			<h1 class="wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s">Hire Us For Your Next Project.</h1>
			<a href="#" class="btn btn-transparent wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".6s">Let's Work Together</a>
		</div>
	</section>

	<!--  SERVICES -->

	<section id="services">
		<div class="container">
			<h2>Our Services</h2>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-smartphone"></span>
						</div>
						<div class="service-content">
							<h5>Mobile Apps</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-store"></span>
						</div>
						<div class="service-content">
							<h5>E-Commerce</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-chart-bars"></span>
						</div>
						<div class="service-content">
							<h5>Digital Marketing</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-laptop-phone"></span>
						</div>
						<div class="service-content">
							<h5>Web Design</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-code"></span>
						</div>
						<div class="service-content">
							<h5>Web Development</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="service">
						<div class="service-icon">
							<span class="lnr lnr-layers"></span>
						</div>
						<div class="service-content">
							<h5>Graphic Design</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-sm-offset-2 text-center mx-auto bottom-caption wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<a href="#" class="btn btn-primary">Start a Project</a>
				</div>
			</div>
		</div>
	</section>

	<!-- TESTIMONIALS -->

	<section id="testimonials">
		<div class="container">
			<h2>Testimonials</h2>
			<div class="row">
				<div class="col-lg-8 col-sm-offset-2 mx-auto wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="owl-carousel owl-testimonials">
						<div class="item">
							<img src="https://via.placeholder.com/90x90" class="img-fluid" alt="client-1">
							<h6>Adam Joe</h6>
							<span>Micro CEO</span>
							<span class="lnr lnr-smile"></span>
							<p class="quote">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia."</p>
						</div>
						<div class="item">
							<img src="https://via.placeholder.com/90x90" class="img-fluid" alt="client-2">
							<h6>Maria Merline</h6>
							<span>Web Designer</span>
							<span class="lnr lnr-smile"></span>
							<p class="quote">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia."</p>
						</div>
						<div class="item">
							<img src="https://via.placeholder.com/90x90" class="img-fluid" alt="client-3">
							<h6>Jason Wasghinton</h6>
							<span>Web Developer</span>
							<span class="lnr lnr-smile"></span>
							<p class="quote">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia."</p>
						</div>
						<div class="item">
							<img src="https://via.placeholder.com/90x90" class="img-fluid" alt="client-4">
							<h6>Sara Doe</h6>
							<span>Graphic Designer</span>
							<span class="lnr lnr-smile"></span>
							<p class="quote">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia."</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- TEAM -->

	<section id="team">
		<div class="container">
			<h2>Our Team</h2>
			<div class="row">
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
					<div class="team-member">
						<div class="team-img">
							<img src="https://via.placeholder.com/500x500" class="img-fluid" alt="team-1">
						</div>
						<div class="team-caption">
							<h4>Asia Clark</h4>
							<p>CEO Founder</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
					<div class="team-member">
						<div class="team-img">
							<img src="https://via.placeholder.com/500x500" class="img-fluid" alt="team-2">
						</div>
						<div class="team-caption">
							<h4>Jason Brody</h4>
							<p>Designer</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".6s">
					<div class="team-member">
						<div class="team-img">
							<img src="https://via.placeholder.com/500x500" class="img-fluid" alt="team-3">
						</div>
						<div class="team-caption">
							<h4>Maria Doe</h4>
							<p>Developer</p>
							<ul class="social-media">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CONTACT -->

	<section id="contact">
		<div class="svg-wave">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
				<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
			</svg>
		</div>
		<div class="container">
			<h2>Contact Us</h2>
			<div class="row">
				<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
					<h4>Get In Touch</h4>
					<a href="#" class="email-link">youremail@gmail.com</a>
					<p>+212 (342) 298 1042</p>
					<p>2100/32 New York, Adress example, lorem ipsum. <b>USA</b></p>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-8 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
					<h4>Let's Talk About a Project</h4>
					<form>
						<div class="row">
							<div class="col">
								<input type="email" class="form-control" placeholder="email:">
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="subject:">
							</div>
						</div>
						<!-- Form Group -->
						<div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
							<textarea id="form-message" cols="30" rows="5" class="form-control" placeholder="Message:" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Send a Message</button>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection