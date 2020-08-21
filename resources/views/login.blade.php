@extends("layouts.master")

@section("title")
Login | MyWebsite
@endsection

@section("content")
	
	<section class="section-100">
		<div class="container">
			<div class="box">
				<br>
				<h2 class="text-center">
					LOGIN
				</h2>
				<br>
				<div class="form-group">
					<div class="form-label">Email Id</div>
					<input type="text" class="form-control" placeholder="">
				</div>
				<div class="form-group">
					<div class="form-label">Password</div>
					<input type="password" class="form-control" placeholder="">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block">LOGIN</button>
				</div>
			</div>
		</div>
	</section>
	
@endsection