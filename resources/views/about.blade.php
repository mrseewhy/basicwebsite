@extends('app')

@section('head')
    About
@endsection('head')
@section('content')
<section id="aboutus">
	<div class="container-full">
		<div class="container">

			<div id="aboutusleft" class="col-xs-6">
				<div class="heading">
					<h3>About Us</h3>
				</div>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 

					Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>	
			</div> <!-- /#aboutusleft -->

			<div id="aboutusright" class="col-xs-6">
				<div class="heading">
					<h3>Our Skills</h3>
				</div>

				<p>Web Development</p>
				<div class="progress">
					<div class="progress-bar progress-web-development" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="percent">85%</span>
					</div>
				</div>

				<p>Web Design</p>
				<div class="progress">
					<div class="progress-bar progress-web-desingn" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span class="percent">80%</span>
					</div>
				</div>

				<p>Photoshop</p>
				<div class="progress">
					<div class="progress-bar progress-photoshop" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
						<span class="percent">90%</span>
					</div>
				</div>

				<p>Illustrator</p>
				<div class="progress">
					<div class="progress-bar progress-issustrator" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
						<span class="percent">75%</span>
					</div>
				</div>

			</div> <!-- /#aboutusright -->
			
		</div> <!-- /.container -->
		<div class="clear-bottom"></div>
	</div> <!-- /.container-full -->
</section><!-- /.aboutus -->
@endsection('content')