<?php
$this->layout = false;
$appDescription = 'iRep: Know your Rep!';
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>The Project | Home</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<?=
		$this->Html->css('bootstrap.css');
		?>
		<!-- Font Awesome CSS -->
		<?=
		$this->Html->css('Frontend/fonts/font-awesome/css/font-awesome.css');
		?>
		<!-- Fontello CSS -->
		<?=
		$this->Html->css('Frontend/fonts/fontello/css/fontello.css');
		?>
		<!-- Plugins -->
		<?php
		echo $this->Html->css('Frontend/plugins/magnific-popup/magnific-popup.css');
		echo $this->Html->css('Frontend/plugins/rs-plugin/css/settings.css');
		echo $this->Html->css('Frontend/css/animations.css');
		echo $this->Html->css('Frontend/plugins/owl-carousel/owl.carousel.css');
		echo $this->Html->css('Frontend/plugins/owl-carousel/owl.transitions.css');
		echo $this->Html->css('Frontend/plugins/hover/hover-min.css');
		?>
		<!-- the project core CSS file -->
		<?=
		$this->Html->css('Frontend/css/style.css');
		?>
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<?=
		//$this->Html->css('Frontend/css/skins/light_blue.css');
		$this->Html->css('Frontend/css/skins/green.css');
		?>
		<!-- Custom css -->
		<?=
		$this->Html->css('Frontend/css/custom.css');
		?>
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<body class="no-trans front-page transparent-header ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				
				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top colored ">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-6 col-md-9">
								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
												<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>+1 347 379 2032</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<div class="header-top-dropdown text-right">
										<div class="btn-group">
											<a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form class="login-form margin-clear">
														<div class="form-group has-feedback">
															<label class="control-label">Username</label>
															<input type="text" class="form-control" placeholder="">
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Password</label>
															<input type="password" class="form-control" placeholder="">
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
														<button type="submit" class="btn btn-gray btn-sm">Log In</button>
														<span class="pl-5 pr-5">or</span>
														<button type="submit" class="btn btn-default btn-sm">Sing Up</button>
														<ul>
															<li><a href="#">Forgot your password?</a></li>
														</ul>
														<span class="text-center">Login with</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</form>
												</li>
											</ul>
										</div>
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed   clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<?= $this->Html->image('frontend/images/logo_green.png', ['alt' => 'The Project', 'url' => array('controller'=> 'Pages', 'action'=>'display'), 'id'=> 'logo-image']);?>
										</div>

									<!-- name-and-slogan -->
									<div class="site-slogan">
										Bridging The Constituency Gap!
									</div>
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-9">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav ">
													<li class="active">
														<?=
														$this->Html->link('Home', array('controller'=> 'Pages', 'action'=>'display'));
														?>
														
													</li>
													<!-- menu start -->
													<li>
														<a href="#">Download App</a>
													</li>
													<!-- mega-menu end -->
													
													<!-- mega-menu start -->													
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Federal Constituencies</a>
														<ul class="dropdown-menu">
														<li ><?=
														$this->Html->link('Senatorial Districts', array('controller'=> 'SenatorialDistricts', 'action'=>'index'));
														?></li>
														<li ><?=
														$this->Html->link('Federal Constituencies', array('controller'=> 'FederalConstituencies', 'action'=>'index'));
														?></li>
															</ul>
													</li>
													<!-- mega-menu end -->
													<li>
													<?=
														$this->Html->link('State Constituencies', array('controller'=> 'StateConstituencies', 'action'=>'index'));
														?>
														</li>
															
													<li>
														<a href="#">Blog</a>
														</li>
													
												<!-- main-menu end -->
												
												<!-- header dropdown buttons -->
												<div class="header-dropdown-buttons hidden-xs ">
													<div class="btn-group dropdown">
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
															<li>
																<form role="search" class="search-box margin-clear">
																	<div class="form-group has-feedback">
																		<input type="text" class="form-control" placeholder="Search">
																		<i class="icon-search form-control-feedback"></i>
																	</div>
																</form>
															</li>
														</ul>
													</div>
													<div class="btn-group dropdown">
														<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i></button>
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li>
																<table class="table table-hover">
																	<thead>
																		<tr>
																			<th class="quantity">QTY</th>
																			<th class="product">Product</th>
																			<th class="amount">Subtotal</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td class="quantity">2 x</td>
																			<td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
																			<td class="amount">$199.00</td>
																		</tr>
																		<tr>
																			<td class="quantity">3 x</td>
																			<td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
																			<td class="amount">$299.00</td>
																		</tr>
																		<tr>
																			<td class="quantity">3 x</td>
																			<td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
																			<td class="amount">$1499.00</td>
																		</tr>
																		<tr>
																			<td class="total-quantity" colspan="2">Total 8 Items</td>
																			<td class="total-amount">$1997.00</td>
																		</tr>
																	</tbody>
																</table>
																<div class="panel-body text-right">	
																	<a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View Cart</a>
																	<a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Checkout</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<!-- header dropdown buttons end-->
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
		
			<!-- banner start -->
			<!-- ================ -->
			<div class="banner clearfix">

				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">
					
					<!-- slider revolution start -->
					<!-- ================ -->
					<div class="slider-banner-container">
						<div class="slider-banner-fullscreen">
							<ul class="slides">
								<!-- slide 1 start -->
								<!-- ================ -->
								<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Bridging The Constituency Gap">
								
								<!-- main image -->
								<!-- img src="images/slider-fullscreen-slide-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" -->
								<?=
								$this->Html->image('Frontend/images/slider-fullscreen-slide-1.jpg', ['alt'=>'slidebg1', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat', 'data-bgfit'=>'cover'])
								?>
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="0">
								</div>

								<!-- LAYER NR. 1 -->
								<div class="tp-caption sfr stl xlarge_white"
									data-x="center"
									data-y="70"
									data-speed="200"
									data-easing="easeOutQuad"
									data-start="1000"
									data-end="2500"
									data-splitin="chars"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-splitout="chars">Vote
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption sfl str xlarge_white"
									data-x="center"
									data-y="70"
									data-speed="200"
									data-easing="easeOutQuad"
									data-start="2500"
									data-end="4000"
									data-splitin="chars"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-splitout="chars">Connect
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption sfr stt xlarge_white"
									data-x="center"
									data-y="70"
									data-speed="200"
									data-easing="easeOutQuad"
									data-start="4000"
									data-end="6000"
									data-splitin="chars"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-splitout="chars"
									data-endspeed="400">Evaluate
								</div>					

								<!-- LAYER NR. 4 -->
								<div class="tp-caption sft fadeout text-center large_white"
									data-x="center"
									data-y="70"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="6400"
									data-end="10000"><span class="logo-font">The <span class="text-default">Project</span></span> <br> Bridging The Constituency Gap
								</div>	

								<!-- LAYER NR. 5 -->
								<div class="tp-caption sfr fadeout"
									data-x="center"
									data-y="210"
									data-hoffset="-232"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="1000"
									data-end="5500"><span class="icon large circle"><i class="circle icon-thumbs-up"></i></span>
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfl fadeout"
									data-x="center"
									data-y="210"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="2500"
									data-end="5500"><span class="icon large circle"><i class="circle icon-arrows-ccw"></i></span>
								</div>

								<!-- LAYER NR. 7 -->
								<div class="tp-caption sfr fadeout"
									data-x="center"
									data-y="210"
									data-hoffset="232"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="4000"
									data-end="5500"><span class="icon large circle"><i class="circle icon-chart-line"></i></span>
								</div>

								<!-- LAYER NR. 8 -->
								<div class="tp-caption ZoomIn fadeout text-center tp-resizeme large_white"
									data-x="center"
									data-y="170"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="6400"
									data-end="10000"><div class="separator light"></div>
								</div>	

								<!-- LAYER NR. 9 -->
								<div class="tp-caption sft fadeout medium_white text-center"
									data-x="center"
									data-y="210"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="5800"
									data-end="10000"
									data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam aliquid culpa offici, <br> tenetur fugiat dolorum sapiente eligendi...
								</div>

								<!-- LAYER NR. 10 -->
								<div class="tp-caption fade fadeout"
									data-x="center"
									data-y="bottom"
									data-voffset="100"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="2000"
									data-end="10000"
									data-endspeed="200">
									<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
								</div>
								</li>
								<!-- slide 1 end -->

								<!-- slide 2 start -->
								<!-- ================ -->
								<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Bridging The Constituency Gap">
								
								<!-- main image -->
								<!-- img src="images/slider-fullscreen-slide-1.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" -->
								<?=
								$this->Html->image('Frontend/images/slider-fullscreen-slide-2.jpg', ['alt'=>'slidebg2', 'data-bgposition'=>'center top', 'data-bgrepeat'=>'no-repeat', 'data-bgfit'=>'cover'])
								?>
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="500"
									data-easing="easeOutQuad"
									data-start="0">
								</div>

								<!-- LAYER NR. 1 -->
								<div class="tp-caption sfb fadeout large_white"
									data-x="left"
									data-y="70"
									data-speed="500"
									data-start="1000"
									data-easing="easeOutQuad"
									data-end="10000"><span class="logo-font">The Project</span> <br> Bridging The Constituency Gap
								</div>	

								<!-- LAYER NR. 2 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="200" 
									data-speed="500"
									data-start="1300"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> 100% Free
								</div>

								<!-- LAYER NR. 3 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="260" 
									data-speed="500"
									data-start="1600"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-check"></i></span> Web/Mobile Based
								</div>

								<!-- LAYER NR. 4 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="320" 
									data-speed="500"
									data-start="1900"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-gift"></i></span> Packaged For The Nigerian Audience
								</div>

								<!-- LAYER NR. 5 -->
								<div class="tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="380" 
									data-speed="500"
									data-start="2200"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-hourglass"></i></span> Very Easy to Customize
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfb fadeout small_white"
									data-x="left"
									data-y="450"
									data-speed="500"
									data-start="2500"
									data-easing="easeOutQuad"
									data-endspeed="600"><a href="#" class="btn btn-default btn-lg btn-animated">Download Android App <i class="fa fa-android"></i></a>
								</div>
								</li>
								<!-- slide 2 end -->
							</ul>
							<div class="tp-bannertimer"></div>
						</div>
					</div>
					<!-- slider revolution end -->

				</div>
				<!-- slideshow end -->

			</div>
			<!-- banner end -->
			
			<div id="page-start"></div>

			<!-- section start -->
			<!-- ================ -->
			<section class="light-gray-bg pv-30 clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center">Core <strong>Features</strong></h2>
							<div class="separator"></div>
							<p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
								<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
								<h3>Constituency Connect</h3>
								<div class="separator clearfix"></div>
								<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
								<span class="icon default-bg circle"><i class="fa fa-comment-o"></i></span>
								<h3>Instant Messaging</h3>
								<div class="separator clearfix"></div>
								<p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
						<div class="col-md-4 ">
							<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
								<span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
								<h3>Polling</h3>
								<div class="separator clearfix"></div>
								<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
								<a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section default-bg clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8">
										<h1 class="title">Hop on board now!</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quasi explicabo consequatur consectetur, a atque voluptate officiis eligendi nostrum.</p>
									</div>
									<div class="col-sm-4">
										<br>
										<p><a href="#" class="btn btn-lg btn-gray-transparent btn-animated">Learn More<i class="fa fa-arrow-right pl-20"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->
			<!-- ================ -->
			<footer id="footer" class="clearfix ">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-8">
									<div class="footer-content">
										<div class="logo-footer">
						<?=
						$this->Html->image('Frontend/images/logo_green.png', ['alt'=> '']);
						?>
										</div>
										<div class="row">
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore fugit vitae quia dicta inventore reiciendis. Ipsa, aut voluptas quaerat.</p>
												<ul class="social-links circle animated-effect-1">
													<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
													<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
													<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
													<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
													<li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
													<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
													<li class="youtube"><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
												</ul>
												<ul class="list-icons">
													<li><i class="fa fa-map-marker pr-10 text-default"></i> One infinity loop, 54100</li>
													<li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
													<li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@theproject.com</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<div id="map-canvas"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer-content">
										<h2 class="title">Contact Us</h2>
										<br>
										<div class="alert alert-success hidden" id="MessageSent2">
											We have received your message, we will contact you very soon.
										</div>
										<div class="alert alert-danger hidden" id="MessageNotSent2">
											Oops! Something went wrong please refresh the page and try again.
										</div>								
										<form role="form" id="footer-form" class="margin-clear">
											<div class="form-group has-feedback">
												<label class="sr-only" for="name2">Name</label>
												<input type="text" class="form-control" id="name2" placeholder="Name" name="name2">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label class="sr-only" for="email2">Email address</label>
												<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label class="sr-only" for="message2">Message</label>
												<textarea class="form-control" rows="6" id="message2" placeholder="Message" name="message2"></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2015 The Project by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<?=
		$this->Html->script('Frontend/plugins/jquery.min');
		?>
		<?=
		$this->Html->script('bootstrap.min');
		?>
		<!-- Modernizr javascript -->
		<?=
		$this->Html->script('Frontend/plugins/modernizr');
		?>
		<!-- jQuery Revolution Slider  -->
		<?=
		$this->Html->script('Frontend/plugins/rs-plugin/js/jquery.themepunch.tools.min');
		?>
		<?=
		$this->Html->script('Frontend/plugins/rs-plugin/js/jquery.themepunch.revolution.min');
		?>
		<!-- Isotope javascript -->
		<?=
		$this->Html->script('Frontend/plugins/isotope/isotope.pkgd.min');
		?>
		<!-- Magnific Popup javascript -->
		<?=
		$this->Html->script('Frontend/plugins/magnific-popup/jquery.magnific-popup.min');
		?>	
		<!-- Appear javascript -->
		<?=
		$this->Html->script('Frontend/plugins/waypoints/jquery.waypoints.min');
		?>
		<!-- Count To javascript -->
		<?=
		$this->Html->script('Frontend/plugins/jquery.countTo');
		?>
		<!-- Parallax javascript -->
		<?=
		$this->Html->script('Frontend/plugins/jquery.parallax-1.1.3');
		?>
		<!-- Contact form -->
		<?=
		$this->Html->script('Frontend/plugins/jquery.validate');
		?>
		
		<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=false"></script>
		
		<script type="text/javascript" src="js/google.map.config.js"></script>
		<?=
		$this->Html->script('Frontend/js/google.map.config');
		?>
		
		<!-- Background Video -->
		<?=
		$this->Html->script('Frontend/plugins/vide/jquery.vide');
		?>
		<!-- Owl carousel javascript -->
		<?=
		$this->Html->script('Frontend/plugins/owl-carousel/owl.carousel');
		?>
		<!-- SmoothScroll javascript -->
		<?=
		$this->Html->script('Frontend/plugins/jquery.browser');
		?>
		<?=
		$this->Html->script('Frontend/plugins/SmoothScroll');
		?>
		<!-- Initialization of Plugins -->
		<?=
		$this->Html->script('Frontend/js/template');
		?>
		<!-- Custom Scripts -->
		<?=
		$this->Html->script('Frontend/js/custom');
		?>
	</body>
</html>
