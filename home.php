<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _mh
 */

get_header(); ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- !Hero element -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<section id="wpb-hero" style="height: 100%;">
	<div id="wpb-hero-inner">

	 <?php putRevSlider( 'WPB Home' ); ?>

	</div><!-- #wpb-hero-inner -->
</section><!-- #wpb-hero -->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- !Main wrapper -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<div id="wrapper">

	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- !Main content -->
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

	<div id="main" role="main">

	  		<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section  About -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<section id="about" class="wpb-section">

				<!-- Background pattern overlay -->
				<!--<div class="wpb-section-overlay"></div> -->
				<div class="wpb-section-inner">      
					<div class="container">

						<article>

							<div class="entry-content clearfix">

								<div class="row">

									<div class="col-md-6">
										<h1 class="intro">Our web-based tools offer our clients <strong>creative solutions</strong> to engage more effectively with their audiences.</p>
									</div>

									<div class="col-md-6 wpb-about">
										<div class="row">
											<figure>
												<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/responsive-screens.png" alt="wpb Creative screenshot">
												<figcaption><h2><strong>Creative Solutions:</strong><br/> Transforming ideas into online success.</h2></figcaption>
											</figure>
										</div>
									</div>
								
								</div><!-- .row -->
							</div><!-- .entry-content -->
						
						</article>

					</div><!-- .container -->	
				</div><!-- .wpb-section-inner -->
			</section><!-- .wpb-section -->	

		  	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section About -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


	    	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Services Header -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	
			<section id="services-header" class="wpb-section wpb-style-light">

				<!-- Background pattern overlay -->
				<div class="wpb-section-overlay">

					<div class="wpb-section-inner">
						<div class="container">

							<article>

								<div class="entry-content clearfix">

									<div class="row">

										<div class="col-sm-12 services-parallax">
											<h1 class="light">Wide range of effective <strong>designs and development</strong> services to facilitate the growth of your business.</h1>
										</div>

									</div><!-- .row -->

								</div><!-- .entry-content -->

							</article>

						</div><!-- .container -->
					</div><!-- .wpb-section-inner --> 

				</div><!-- .Background pattern overlay -->
			</section><!-- .wpb-section -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section Servives Header -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Services -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section id="services" class="wpb-section">

				<!-- Background pattern overlay -->
				<!-- <div class="wpb-section-overlay"></div> -->

				<div class="wpb-section-inner">      
					<div class="container">

						<article>

							<!-- Start section header -->
							<div class="section-header">
								<h1 class="section-title">Our Services</h1>
								<div class="section-header-sep"><span></span></div>
								<h4 class="section-tagline">Find out what we can offer your business</h4>
							</div>
							<!-- End section header -->

							<div class="entry-content clearfix">

								<div class="row">

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-lightbulb-o"></i>
												</span>
												<span class="wpb-icon-title">Ideate</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-cogs"></i>
												</span>
												<span class="wpb-icon-title">Strategy</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-pencil-square-o"></i>
												</span>
												<span class="wpb-icon-title">Creative</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-code"></i>
												</span>
												<span class="wpb-icon-title">Development</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-share-alt"></i>
												</span>
												<span class="wpb-icon-title">Social</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="col-xs-6 col-sm-4 col-md-2">

										<p class="text-center large-margin">
											<!-- Start round icon -->
											<a href="#" class="wpb-icon-round">
												<span class="wpb-icon">
													<i class="fa fa-ticket"></i>
												</span>
												<span class="wpb-icon-title">Support</span>
											</a>
											<!-- End round icon -->
										</p>

									</div>

									<div class="btn-wraper col-sm-12 text-center clearfix"><p><a href="#" class="btn">Learn More</a></p></div>

								</div><!-- .row -->

							</div><!-- .entry-content -->

						</article>

					</div><!-- .container -->
				</div><!-- .wpb-section-inner -->
			</section><!-- .wpb-section -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section Serivces -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section More Services-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section id="services-more" class="wpb-section">

				<!-- Background pattern overlay -->
				<div class="wpb-section-overlay">

					<div class="wpb-section-inner">
						<div class="container">

							<article>

								<div class="entry-content clearfix">

									<div class="row wpb-equalize-children">

										<div class="wpb-vertical-align-children">
											<div>
											<p class="x-large light wpb-style-dark mobile-align-center">Want to find out more about our services?</p>
												<p class="mobile-align-center"><a href="#" class="btn">Contact Us</a></p>
											</div>
										</div>
									</div>

								</div><!-- .entry-content -->

							</article>

						</div><!-- .container -->
					</div><!-- .wpb-section-inner -->
				</div>
			</section><!-- .wpb-section -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section More Services-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Team -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section id="team" class="wpb-section">

				<!-- Background pattern overlay -->
				<!-- <div class="wpb-section-overlay"></div> -->

				<div class="wpb-section-inner">
					<div class="container">

						<article>

							<!-- Start section header -->
							<div class="section-header wow fadeIn">
								<h1 class="section-title">Our Team</h1>
								<div class="section-header-sep"><span></span></div>
								<h4 class="section-tagline">Meet the faces behind our company</h4>
							</div>
							<!-- End section header -->

							<div class="entry-content">
								<div class=" container clearfix">

 									<?php echo do_shortcode("[easy_widget id=44]");?>


<!-- 										<div class="col-sm-4 col-md-4 wpb-format-member">
											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Team 1" width="370" height="280">
													<span class="entry-featured-data clearfix">
														<span class="entry-title">Frank Murray</span>
														<span class="entry-data">President and Founder</span>
													</span>
												</div>
											</div>
											<div class="entry-excerpt">
												<p>
													Urna nulla proin. Sapien quam urna. Non vitae congue justo nonummy eu turpis pharetra at cursus fusce vitae rutrum libero euismod ornare at&hellip;
													<br/>
													<a class="wpb-readmore" href="#">Read more</a> 
												</p>     
											</div>
										</div>  -->
										<!-- End slider block -->

										<!-- Start slider block -->
<!-- 										<div class="col-sm-4 col-md-4 wpb-format-member">
											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Team 2" width="370" height="280">

													<span class="entry-featured-data clearfix">
														<span class="entry-title">Doug Kilzer</span>
														<span class="entry-data">Co-Founder and Chief Customer Officer </span>
													</span>
												</div>
											</div>
											<div class="entry-excerpt">
												<p>
													Urna nulla proin. Sapien quam urna. Non vitae congue justo nonummy eu turpis pharetra at cursus fusce vitae rutrum libero euismod ornare at&hellip;
													<br/>
													<a class="wpb-readmore" href="#">Read more</a> 
												</p>
											</div>
										</div> -->
										<!-- End slider block -->

										<!-- Start slider block -->
<!-- 										<div class="col-sm-4 col-md-4 wpb-format-member">
											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Team 3" width="370" height="280">
													<span class="entry-featured-data clearfix">
														<span class="entry-title">Harry Fisher</span>
														<span class="entry-data">Chief Resource Officer </span>
													</span>
												</div>
											</div>
											<div class="entry-excerpt">
												<p>
													Urna nulla proin. Sapien quam urna. Non vitae congue justo nonummy eu turpis pharetra at cursus fusce vitae rutrum libero euismod ornare at&hellip;
													<br/>
													<a class="wpb-readmore" href="#">Read more</a> 
												</p>
											</div>
										</div> -->
										<!-- End slider block -->
									</div>
								</div>
							</div>		
						</article>
					</div>
				</div>					
			</section>
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End Section Team -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->


			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Tweets-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section id="tweets" class="wpb-section wpb-style-light wpb-style-wide">

				<!-- Background pattern overlay -->
				<div class="wpb-section-overlay">

				<div class="wpb-section-inner">
					<div class="container">
							<!-- Start resource -->
							<div class="wpb-format-tweet">
								<div class="entry-featured">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="entry-content clearfix">
									<p>We just launched our new website #relaunch</p>
								</div>
								<div class="entry-title">Posted 2 hours ago</div>
							</div>
							<!-- End resource -->
					</div><!-- .container -->
				</div><!-- .wpb-section-inner -->
			</div>
			</section><!-- .wpb-section -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section Tweets-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			


			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Clients-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section class="wpb-section wpb-style-light">

				<!-- Background pattern overlay -->
				<div class="wpb-section-overlay"></div>

				<div class="wpb-section-inner">
					<div class="container">

						<article>

							<div class="entry-content clearfix">

								<h1 class="content-title text-center">Our Clients</h1>

								<div class="row">

									<div class="col-sm-3">
										<p class="text-center"><a href="#"><img src="assets/images/client-logo-1.png" alt="Client 1" width="180" height="120"></a></p>
									</div>

									<div class="col-sm-3">
										<p class="text-center"><a href="#"><img src="assets/images/client-logo-2.png" alt="Client 2" width="180" height="120"></a></p>
									</div>

									<div class="col-sm-3">
										<p class="text-center"><a href="#"><img src="assets/images/client-logo-3.png" alt="Client 3" width="180" height="120"></a></p>
									</div>

									<div class="col-sm-3">
										<p class="text-center"><a href="#"><img src="assets/images/client-logo-4.png" alt="Client 4" width="180" height="120"></a></p>
									</div>

								</div>

							</div><!-- .entry-content -->

						</article>

					</div><!-- .container -->
				</div><!-- .wpb-section-inner -->
			</section><!-- .wpb-section -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !End section Clients -->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
			<!-- !Start section Blog-->
			<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<section id="blog" class="wpb-section">
				<div class="wpb-section-inner">
					<div class="container">
						<article>
							<!-- Start section header -->
							<div class="section-header">
								<h1 class="section-title">Our Blog</h1>
								<div class="section-header-sep"><span></span></div>
								<h4 class="section-tagline">Find out what's happening at our company</h4>
							</div>
							<!-- End section header -->
							<div class="entry-content">

								<div class="clearfix">

									<!-- Start slider block -->
									<div class="row">

										<!-- Start slider block -->
										<div class="col-sm-4 wpb-format-post">

											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Blog 1" width="370" height="280">

													<span class="entry-featured-data clearfix">
														<span class="entry-date">18 February, 2014</span>
														<span class="entry-comments">1
														</span>
													</span>
												</div>

												<table class="entry-post-data">
													<tr>
														<td class="entry-icon">
															<i class="wpb-icon-polaroid-1"></i>
														</td>
														<td>
															<h2 class="entry-title">
																<a href="post-single-image.html">We invent the future</a>
															</h2>
															<span class="entry-meta">By Admin</span>
														</td>
													</tr>
												</table>

											</div>

											<div class="entry-excerpt">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi elit, feugiat vestibulum laoreet at, auctor sit amet velit. Vivamus in
													<br/>
													<a href="#" class="wpb-readmore">Learn more</a>
												</p>
											</div>
										</div>
										<!-- End slider block -->

										<!-- Start slider block -->
										<div class="col-sm-4 wpb-format-post">

											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Blog 1" width="370" height="280">
													<span class="entry-featured-data clearfix">
														<span class="entry-date">16 February, 2014</span>
														<span class="entry-comments">2
														</span>
													</span>
												</div>

												<table class="entry-post-data">
													<tr>
														<td class="entry-icon">
															<i class="wpb-icon-film-1"></i>
														</td>
														<td>
															<h2 class="entry-title">
																<a href="post-video.html">Touch tomorrow advert</a>
															</h2>
															<span class="entry-meta">By Admin</span>
														</td>
													</tr>
												</table>

											</div>

											<div class="entry-excerpt">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi elit, feugiat vestibulum laoreet at, auctor sit amet velit. Vivamus in
													<br/>
													<a href="#" class="wpb-readmore">Learn more</a>
												</p>
											</div>
										</div>
										<!-- End slider block -->

										<!-- Start slider block -->
										<div class="col-sm-4 wpb-format-post">

											<div class="entry-header">
												<div class="entry-featured-archive">
													<img src="http://d2isblg909whrf.cloudfront.net/themes/wpb/team-member.png" alt="Blog 1" width="370" height="280">

													<span class="entry-featured-data clearfix">
														<span class="entry-date">14 February, 2014</span>
														<span class="entry-comments">4
														</span>
													</span>
												</div>

												<table class="entry-post-data">
													<tr>
														<td class="entry-icon">
															<i class="wpb-icon-file"></i>
														</td>
														<td>
															<h2 class="entry-title">
																<a href="post-text.html">Innovative design ideas</a>
															</h2>
															<span class="entry-meta">By Admin</span>
														</td>
													</tr>
												</table>

											</div>

											<div class="entry-excerpt">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi elit, feugiat vestibulum laoreet at, auctor sit amet velit. Vivamus in
													<br/>
													<a href="#" class="wpb-readmore">Learn more</a>
												</p>
											</div>
										</div>
										<!-- End slider block -->
									</div>
								</div>
							</div>
						</article>
					</div><!-- .container -->
				</div><!-- .wpb-section-inner -->
			</section><!-- .wpb-section -->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- !End section Blog-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->



<?php get_footer(); ?>
