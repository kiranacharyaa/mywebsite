@extends("layouts.master")

@section("title")
This is Index page title
@endsection

@section("content")
<section class="banner">
	<div class="container">
		<div class="banner-content">
			<h1>Welcome to Home page</h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eius adipisci consequuntur dignissimos inventore dicta, enim culpa accusamus, perspiciatis in.</h4>
			<button class="btn btn-primary btn-lg">Contact</button>
		</div>
	</div>
</section>

<section class="section-100">
	<div class="container">
		<h1 class="text-center">Simple bootstrap card</h1>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="images/banner.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title 1</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="images/banner.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title 2</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Button</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="images/banner.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title 3</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection