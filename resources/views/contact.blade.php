@extends('layouts.master')


@section('content')

		<!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/banner-contact.jpg" alt="" />
			</div>
		</div>
		<!-- #end Banner/Static -->
	</header>
	<!-- End Header -->
	<!-- Content -->
	<br>
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">
				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
								<form id="quote-request" class="form-quote" action="form/quote-request.php" method="post">
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
									</div>
									<div class="form-field col-md-6">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
									</div>
									<div class="form-field col-md-6">
									</div>
								</div>
								<div class="form-group row">
									<ul class="form-field clearfix">
									</ul>
									<ul class="form-field clearfix">
									</ul>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6">
									</div>
									<div class="form-field col-md-6">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-12">
								<!-- Map -->
								<div class="map-holder map-contact">
								<div id="gmap"></div>
								</div>
								<!-- End map -->	
								<br>
								<br>
								<br>		
								</div>
								</div>
								
								<div class="form-results"></div>
							</form>
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						<ul class="contact-list">
							<li><em class="fa fa-map" aria-hidden="true"></em>
								<span>{{ $contact->address }}</span>
							</li>
							<li><em class="fa fa-phone" aria-hidden="true"></em>
								<span>{{ $contact->phone }}</span>
							</li>
							<li><em class="fa fa-envelope" aria-hidden="true"></em>
								<span>Email : <a href="#">{{ $contact->email }}</a></span>
							</li>
							<li>
								<em class="fa fa-clock-o" aria-hidden="true"></em><span>{{ $contact->time }}</span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDNaa8LOQISEST6NIGC78vmdnIOynR2SeU"></script> 
	<script src="js/gmaps.js"></script>

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>
</html>

@endsection