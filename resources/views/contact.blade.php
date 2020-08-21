@extends("layouts.master")

@section("title")
Contact us | MyWebsite
@endsection

@section("content")

	<section class="section-100">
		<div class="container">
			<div class="box">
				<br>
				<h2 class="text-center">
					CONTACT US
				</h2>
				<br>
				<div class="form-group">
					<div class="form-label">Email Id</div>
					<input type="text" class="form-control" placeholder="">
				</div>
				<div class="form-group">
					<div class="form-label">Full Name</div>
					<input type="text" class="form-control" placeholder="">
				</div>
				<div class="form-group">
					<div class="form-label">Your Message</div>
					<textarea name="" id="" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block">Send</button>
				</div>
			</div>
		</div>
	</section>

@endsection