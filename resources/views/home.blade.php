@extends('app')

@section('head')
    Home
@endsection('head')

@section('content')
@if(session('success'))
	<div class="alert alert-success alert-dismissible show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		<strong>{{session('success')}}</strong>
	</div>
@endif
<section id="slider">
    <div class="container-full">
        <div class="slider">			
            <div id="main-slider" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol> <!-- /.carousel-indicators -->

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <div class="container slide-element">
                            <img src="img/Responsive-Banner-for-Slider.png" alt="Responsive Banner for Slider">
                            <h1>Aster Digital</h1>
                            <p>
                                Aster Digital is a web design and development company that is build to satisfy your every need.
                                We are the best in the world and we use Laravel Php for our work. 
                            </p>

                            <p class="readmore"><a class="btn" href="#">Read More</a></p>
                        </div> <!-- /.slide-element -->
                    </div> <!--/.active /.item -->

                    <div class="item">
                        <div class="container slide-element">
                            <img src="img/features.png" alt="Features">
                            <h1>What We Do</h1>
                            <p>
                                <br>Web Design
                                <br>Web Developement
                                <br>Digital Marketing
                                <br>Branding
                                <br>Video
                                <br>Music Ending
                            </p>					
                            <p class="readmore"><a class="btn" href="#">Read More</a></p>
                        </div> <!-- /.slide-element -->
                    </div> <!-- /.item -->

                    <div class="item">
                        <div class="container slide-element">
                            <img src="img/Used-Component.png" alt="Used Component.png">
                            <h1>Technology </h1>
                            <p>
                                At Aster Digital We Use
                                <br>Wordpress
                                <br>Laravel
                                <br>Vue
                                <br>Python
                            </p>					
                            <p class="readmore"><a class="btn" href="#">Read More</a></p>
                        </div> <!-- /.slide-element -->
                    </div> <!-- /.item -->
                </div> <!-- /.carousel-inner -->
                
                <!-- slider nav -->
                <a class="carousel-control left" href="#main-slider" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="carousel-control right" href="#main-slider" data-slide="next"><i class="fa fa-chevron-right"></i></a>

            </div> <!-- /#main-slider -->
        </div> <!-- /.slider -->
    </div> <!-- /.container-full -->
</section><!-- /#Slider -->


<section id="somework">
	<div class="worksection">
		<div class="container-full">

			<div class="works">
				<div class="container">
					<h3>Our Works</h3>
				</div>
			</div> <!-- /.works -->

			<div class="container">
				<div class="works-img">
					<div id="work-slide" class="carousel slide">

						<div class="slide2nev">
							<a class="carousel-control left" href="#work-slide" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
							<a class="carousel-control right" href="#work-slide" data-slide="next"><i class="fa fa-chevron-right"></i></a>
						</div> <!-- /.slide2nev -->

							<!-- Slider items -->
							<div class="carousel-inner">

								<div class="active item">

									<div class="col-sm-3">
										<figure>
											<img src="img/9.jpg" alt="9">
											<figcaption>
												<h4>Christmas Gift</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/2.jpg" alt="2">
											<figcaption>
												<h4>Care Centre</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/5.jpg" alt="5">
											<figcaption>
												<h4>Draw Thinking</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/3.jpg" alt="2">
											<figcaption>
												<h4>Pizza Profile</h4>
											</figcaption>							
										</figure>	
									</div>

								</div> <!-- /.active /.item -->

								<div class="item">

									<div class="col-sm-3">
										<figure>
											<img src="img/6.jpg" alt="6">
											<figcaption>
												<h4>Touch your Career</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/1.jpg" alt="1">
											<figcaption>
												<h4>Technology</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/7.jpg" alt="7">
											<figcaption>
												<h4>Gift</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/3.jpg" alt="3">
											<figcaption>
												<h4>Pizza Profile</h4>
											</figcaption>							
										</figure>	
									</div>

								</div> <!-- /.item -->

								<div class="item">

									<div class="col-sm-3">
										<figure>
											<img src="img/9.jpg" alt="9">
											<figcaption>
												<h4>Christmas Gift</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/6.jpg" alt="6">
											<figcaption>
												<h4>Touch your Career</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/8.jpg" alt="8">
											<figcaption>
												<h4>Love</h4>
											</figcaption>							
										</figure>	
									</div>

									<div class="col-sm-3">
										<figure>
											<img src="img/7.jpg" alt="7">
											<figcaption>
												<h4>Gift</h4>
											</figcaption>							
										</figure>	
									</div>

								</div> <!-- /.item -->

							</div>  <!-- /.carousel-inner -->
						<!--/.carousel -->

					</div> <!-- /#work-slide -->
				</div> <!-- /.works-img -->
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->

<section id="aboveportfolio">
	<div class="container-full">
		<div class="shadow">
			<div class="container">

				<h2 class="text-center">
					We Code to Fulfil your Dream...
				</h2>

				<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
				</p>

				<div>
					<ul>
						<li class="btn"><a href="#" class="btn left">Learn more</a></li>
						<li class="btn"><a href="#" class="btn right">Get it now</a></li>
					</ul>
				</div>	

			</div> <!-- /.container -->
		</div> <!-- /.shadow -->
	</div> <!-- /.container-full -->
</section><!-- /#aboveportfolio -->

@endsection('content')


