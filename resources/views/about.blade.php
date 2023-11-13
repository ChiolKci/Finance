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
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-lg">{{ $about->title }}</h2>
				<p><img src="image/photo-sm-j.jpg"  class="alignright col-md-4 no-round" >{!! $about->text !!}
			</div>
		</div>
	</div>
	<!-- End Content -->

@endsection