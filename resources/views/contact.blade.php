@extends('app')

@section('head')
    Contact
@endsection('head')

@section('content')
<section id="contactus">
	<div class="container-full">

		<!-- <div id="map_canvas"></div> /#map_canvas -->

<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com.bd/maps?q=lagos+on+google+map&amp;ie=UTF8&amp;hq=&amp;gl=bd&amp;ll=23.709921,90.407143&amp;spn=0.734303,1.352692&amp;t=m&amp;z=10&amp;iwloc=A&amp;output=embed">
</iframe>


		<div class="shadowcontainer">
			<div class="shadow">

				<div class="clear-top"></div>

				<div class="container">
					<div class="col-md-6 pull-left">
                        @if (count($errors)>0)
							@foreach ($errors->all() as $error)
								<div class="alert alert-danger" role="alert">
									<strong>{{$error}}</strong>
								</div>
							@endforeach
						@endif

						<form role="form" action="contact/submit" method="post">
							<div class="form-group">
								<input type="text" class="form-control" id="InputEmail1" placeholder="name..." name="name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="InputPassword1" placeholder="email..." name="email">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="8" placeholder="message..." name="message"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        @csrf

					</div> <!-- /.col-md-6 -->

					

						<div class="col-md-3 gettouch pull-right"> 
							<h4>Get in touch</h4>
							<p class="email">
								E-mail
							</p>
							<p>
								example@site.com
							</p>
							<p class="email">
								Web
							</p>
							<p>
								www.site.com
							</p>
							<p class="address">
								Address
							</p>
							<p>
								Lagos, Nigeria
							</p>
						</div> <!-- /.col-md-3 /.gettouch -->
						
				</div> <!-- /.container -->
			</div><!-- /.shadow -->
		</div> <!-- /.shadowcontainer -->
	</div> <!-- /.container-full -->
</section> <!-- /.contactus-->
@endsection('content')