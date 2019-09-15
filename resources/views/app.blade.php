<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Simple Website for businesses" >
	<meta name="keywords" content="HTML5,CSS3,bootstrap,JavaScript,One Page Template">
	<meta name="author" content="Olusegun Adeyemi">

	<title> @yield('head') | Aster Digital</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
	

	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
    
    
	
</head>
<body>
	<header id="header">
		<section id="headnev" class="navbar topnavbar" >		
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a href="/" class="navbar-brand header">Asterdigi</a>
				</div> <!-- /.navbar-header -->

				<div class="collapse navbar-collapse">
					<ul class="nav pull-right navbar-nav">
                        <li><a class="header" href="/">Home</a></li>
                        <li><a class="aboutus" href="about">About</a></li>
                        <li><a class="team" href="contact">Contact</a></li>
                        <li><a class="service" href="services">Services</a></li>
                        @if (Request::is('/'))
						<li><a class="portfolio" href="#portfolio">Portfolio</a></li>
						<li><a class="pricing" href="#pricing">Pricing</a></li>
						<li><a class="team" href="#team">Team</a></li>
						@endif
						@if (Request::is('contact'))
						<li><a class="team" href="messages">Messages</a></li>
						@endif
						
                    </ul>
				</div> <!-- /.collapse /.navbar-collapse -->
			</div> <!-- /.container -->	
		</section><!-- /#headnev -->
	</header><!-- /#Header-->

    @yield('content')

@if (Request::is('/'))
    

<section id="portfolio">
	<div class="container-full">

		<div class="container">
			<h2 class="text-center">Our Portfolio Gallery</h2>
			<p class="text-center">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreet <br>olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
			</p>

			<div class="portfolio-type portfolio-nav">

				<ul class="list-inline">
					<li><a class="filter" data-filter="all">All</a></li>
					<li><a class="filter" data-filter="category_1">Website</a></li>
					<li><a class="filter" data-filter="category_2">Application</a></li>
					<li><a class="filter" data-filter="category_3">Branding</a></li>
					<li><a class="filter" data-filter="category_3 category_1">Photography</a></li>
				</ul>

			</div> <!-- /.portfolio-type -->
		</div> <!-- /.container -->

		<div class="container">
			<div class="portfolio-img">

				<ul id="Grid">
					<li class="mix category_3" data-cat="3" >
						<figure>
							<img src="img/8.jpg" alt="8">
							<figcaption>
								<h4>Love</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_2" data-cat="2" >
						<figure>
							<img src="img/9.jpg" alt="9">
							<figcaption>
								<h4>Christmas Gift</h4>
							</figcaption>						
						</figure>	
					</li>

					<li class="mix category_1" data-cat="1" >
						<figure>
							<img src="img/2.jpg" alt="2">
							<figcaption>
								<h4>Care</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_2" data-cat="2" >
						<figure>
							<img src="img/3.jpg" alt="3">
							<figcaption>
								<h4>Pizza</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_1" data-cat="1" >
						<figure>
							<img src="img/4.jpg" alt="4">
							<figcaption>
								<h4>Herbal</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_3" data-cat="3" >
						<figure>
							<img src="img/5.jpg" alt="5">
							<figcaption>
								<h4>Thinking</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_1" data-cat="1" >
						<figure>
							<img src="img/6.jpg" alt="6">
							<figcaption>
								<h4>Career</h4>
							</figcaption>							
						</figure>	
					</li>

					<li class="mix category_1" data-cat="1" >
						<figure>
							<img src="img/7.jpg" alt="7">
							<figcaption>
								<h4>Gift</h4>
							</figcaption>							
						</figure>	
					</li>

				</ul> <!-- /#Grid -->

			</div> <!-- /.portfolio-img -->
		</div> <!-- /.container -->

		<div class="clear-bottom"></div>

	</div> <!-- /.container-full -->
</section><!-- #portfolio -->


<section id="testimonial">
	<div class="testsection">
		<div class="container-full">

			<div class="heading">
				<div class="container">
					<h3>Our Clint testimonial</h3>
				</div>
			</div> <!-- /.heading -->

			<div class="container">

				<div class="col-xs-6">
					<div class="clint-div">
						<div class="avatar">
							<a href="#"><img src="img/avatar.jpg" alt="Clint Thumb"></a>
						</div>
						<P class="name">Jon Dev</P>
						<P class="designation ">CEO of WebCode</P>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreet olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					</p>
				</div>

				<div class="col-xs-6">
					<div class="clint-div">
						<div class="avatar">
							<a href="#"><img src="img/avatar.jpg" alt="Clint Thumb"></a>
						</div>
						<P class="name">Jon Dev</P>
						<P class="designation ">CEO of WebCode</P>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreet olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					</p>
				</div>

				<div class="col-xs-6">
					<div class="clint-div">
						<div class="avatar">
							<a href="#"><img src="img/avatar.jpg" alt="Clint Thumb"></a>
						</div>
						<P class="name">Jon Dev</P>
						<P class="designation ">CEO of WebCode</P>

					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreet olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					</p>
				</div>

				<div class="col-xs-6">
					<div class="clint-div">
						<div class="avatar">
							<a href="#"><img src="img/avatar.jpg" alt="Clint Thumb"></a>
						</div>
						<P class="name">Jon Dev</P>
						<P class="designation ">CEO of WebCode</P>

					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboreet olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					</p>
				</div>

			</div> <!-- /.container -->
		</div> <!-- /.container-full -->
	</div>   <!-- /.testsection -->
</section><!-- /#testimonial -->


<section id="pricing">
	<div class="container-full">

		<div class="clear-top"></div>

		<div class="container">
			<h3>Our Pricing</h3>
			<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
			<div class="clear-top"></div>

			<ul>
				<li class="col-xs-3">
					<div>
						<h4>Basic</h4>
						<h5>Free</h5>
						<p>Premium design</p>
						<p>Awesome services</p>
						<p>Lots of features</p>
						<p>100 users</p>
						<p>Your domain</p>
						<p><a class="btn" href="#">Subscribe</a></p>
					</div>
				</li>

				<li class="col-xs-3">
					<div>
						<h4>Premium</h4>
						<h5>$320</h5>
						<p>Premium design</p>
						<p>Awesome services</p>
						<p>Lots of features</p>
						<p>100 users</p>
						<p>Your domain</p>
						<p><a class="btn" href="#">Subscribe</a></p>
					</div>
				</li>

				<li class="col-xs-3">
					<div>
						<h4>Pro</h4>
						<h5>$700</h5>
						<p>Premium design</p>
						<p>Awesome services</p>
						<p>Lots of features</p>
						<p>100 users</p>
						<p>Your domain</p>
						<p><a class="btn" href="#">Subscribe</a></p>
					</div>
				</li>

				<li class="col-xs-3">
					<div>
						<h4>King</h4>
						<h5>$1500</h5>
						<p>Premium design</p>
						<p>Awesome services</p>
						<p>Lots of features</p>
						<p>100 users</p>
						<p>Your domain</p>
						<p><a class="btn" href="#">Subscribe</a></p>
					</div>
				</li>

			</ul>

		</div> <!-- /.container -->
	</div> <!-- /.container-full -->
</section> <!-- /#pricing -->


<section id="team">
	<div class="container-full">

		<div class="clear-top"></div>

		<div class="container">
			<h3>Our Team</h3>
			<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p>
			
			<div class="clear-top"></div>
			
			<ul>
				<li class="col-xs-3">
					<div class="stafcontainer">

						<div class="staf">
							<div class="avatar">
								<img src="img/avatar-team.jpg" alt="Avatar Team">
							</div>
							<h5 class="text-center">John Dev</h5>
							<h6 class="text-center">CEO of Company</h6>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
							</p>
						</div> <!-- /.staf -->

						<div class="social-icons">
							<ul>
							
								<li class="facebook">
									<a href="http://www.facebook.com/codexcoderltd" target="_blank"><i class="fa fa-facebook"></i></a>
								</li><!-- /.facebook -->

								<li class="twitter">
									<a href="http://twitter.com/codexcoder" target="_blank"><i class="fa fa-twitter"></i></a>
								</li> <!-- /.twitter -->

								<li class="googleplus">
									<a href="https://plus.google.com/104006364028285911315/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li><!-- /.googleplus -->

								<li class="linkedin">
									<a href="http://bd.linkedin.com/in/codexcoder" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li><!-- /.linkedin -->

							</ul>
						</div> <!-- /.social-icons -->

					</div> <!-- /.stafcontainer -->
				</li><!-- /.col-xs-3 -->

				<li class="col-xs-3">
					<div class="stafcontainer">

						<div class="staf">
							<div class="avatar">
								<img src="img/avatar-team.jpg" alt="Avatar Team">
							</div>
							<h5 class="text-center">John Dev</h5>
							<h6 class="text-center">CEO of Company</h6>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
							</p>
						</div> <!-- /.staf -->

						<div class="social-icons">
							<ul>

								<li class="facebook">
									<a href="http://www.facebook.com/codexcoderltd" target="_blank"><i class="fa fa-facebook"></i></a>
								</li><!-- /.facebook -->

								<li class="twitter">
									<a href="http://twitter.com/codexcoder" target="_blank"><i class="fa fa-twitter"></i></a>
								</li> <!-- /.twitter -->

								<li class="googleplus">
									<a href="https://plus.google.com/104006364028285911315/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li><!-- /.googleplus -->

								<li class="linkedin">
									<a href="http://bd.linkedin.com/in/codexcoder" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li><!-- /.linkedin -->

							</ul>
						</div> <!-- /.social-icons -->

					</div> <!-- /.stafcontainer -->
				</li><!-- /.col-xs-3 -->

				<li class="col-xs-3">
					<div class="stafcontainer">

						<div class="staf">
							<div class="avatar">
								<img src="img/avatar-team.jpg" alt="Avatar Team">
							</div>
							<h5 class="text-center">John Dev</h5>
							<h6 class="text-center">CEO of Company</h6>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
							</p>
						</div> <!-- /.staf -->

						<div class="social-icons">
							<ul>
							
								<li class="facebook">
									<a href="http://www.facebook.com/codexcoderltd" target="_blank"><i class="fa fa-facebook"></i></a>
								</li><!-- /.facebook -->

								<li class="twitter">
									<a href="http://twitter.com/codexcoder" target="_blank"><i class="fa fa-twitter"></i></a>
								</li> <!-- /.twitter -->

								<li class="googleplus">
									<a href="https://plus.google.com/104006364028285911315/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li><!-- /.googleplus -->

								<li class="linkedin">
									<a href="http://bd.linkedin.com/in/codexcoder" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li><!-- /.linkedin -->

							</ul>
						</div> <!-- /.social-icons -->

					</div> <!-- /.stafcontainer -->
				</li><!-- /.col-xs-3 -->

				<li class="col-xs-3">
					<div class="stafcontainer">

						<div class="staf">
							<div class="avatar">
								<img src="img/avatar-team.jpg" alt="Avatar Team">
							</div>
							<h5 class="text-center">John Dev</h5>
							<h6 class="text-center">CEO of Company</h6>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
							</p>
						</div> <!-- /.staf -->

						<div class="social-icons">
							<ul>
							
								<li class="facebook">
									<a href="http://www.facebook.com/codexcoderltd" target="_blank"><i class="fa fa-facebook"></i></a>
								</li><!-- /.facebook -->

								<li class="twitter">
									<a href="http://twitter.com/codexcoder" target="_blank"><i class="fa fa-twitter"></i></a>
								</li> <!-- /.twitter -->

								<li class="googleplus">
									<a href="https://plus.google.com/104006364028285911315/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li><!-- /.googleplus -->

								<li class="linkedin">
									<a href="http://bd.linkedin.com/in/codexcoder" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li><!-- /.linkedin -->

							</ul>
						</div> <!-- /.social-icons -->

					</div> <!-- /.stafcontainer -->
				</li><!-- /.col-xs-3 -->
			</ul>
		</div> <!-- /.container -->
	</div><!-- /.container-full -->
</section><!-- /#team -->

@endif

<section id="scroller">
	<div class="container-full">

		<div class="gototop"></div>

		<div class="gotobottom">
			<div class="goup">
				<div class="gotoup">
					<a class="header" href="#header"><i class="fa fa-arrow-circle-up"></i></a>
				</div> <!-- /.gotoup -->
			</div> <!-- /.goup -->
		</div> <!-- /.gotobottom -->
	</div> <!-- /.container-full -->
</section> <!--   /#scroller  -->

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-arrow-circle-o-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<section id="footer">
	<footer class="container-full">
		<div class="container">
			<div class="col-md-3">
				<h4>Flicker</h4>
				<a href="#"><img src="img/footer1.jpg" alt="Footer Image"></a>
				<a href="#"><img src="img/footer2.jpg" alt="Footer Image"></a>
				<a href="#"><img src="img/footer3.jpg" alt="Footer Image"></a>
				<a href="#"><img src="img/footer3.jpg" alt="Footer Image"></a>
				<a href="#"><img src="img/footer1.jpg" alt="Footer Image"></a>
				<a href="#"><img src="img/footer2.jpg" alt="Footer Image"></a>
			</div>
			<div class="col-md-3">
				<h4>Contact info</h4>
				<p>
					Cell: +880-1741-491457 <br>
					Phone:+880-2-88256836 
				</p>
				<p>
					E-mail: example@site.com<br>
					web:www.yoursite.com<br>
				</p>
				<p>
					Address: 252 inner circular road, Motijheel<br>
					Dhaka-1000.
				</p>
			</div>
			<div class="col-md-3">
				<h4>Recent Post</h4>
				<ul class="recent-post">
					<li><a href="#">Recent Post one</a></li>
					<li><a href="#">Recent Post two</a></li>
					<li><a href="#">Recent Post three</a></li>
					<li><a href="#">Recent Post four</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Social Update</h4>
				<div class="social-icons">
					<ul>
					
						<li class="facebook">
							<a href="http://www.facebook.com/codexcoderltd" target="_blank"><i class="fa fa-facebook"></i></a>
						</li><!-- /.facebook -->

						<li class="twitter">
							<a href="http://twitter.com/codexcoder" target="_blank"><i class="fa fa-twitter"></i></a>
						</li> <!-- /.twitter -->

						<li class="googleplus">
							<a href="https://plus.google.com/104006364028285911315/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
						</li><!-- /.googleplus -->

						<li class="linkedin">
							<a href="http://bd.linkedin.com/in/codexcoder" target="_blank"><i class="fa fa-linkedin"></i></a>
						</li><!-- /.linkedin -->

					</ul>
				</div> <!-- /.social-icons -->

			</div> <!-- /.col-md-3 -->
		</div> <!-- /.container -->

		<div class="clear-bottom copyright">
			<p>&copy; Copyright 2014, All Rights Reserved. Designed and Developed by <a href="https://asterdigi.com">Olusegun Adeyemi</a></p>
		</div> <!-- /.clear-bottom /.copyright -->

	</footer> <!-- /.container-full -->
</section> <!-- /.footer -->
</body>
</html>