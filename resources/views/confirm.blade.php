@extends('layouts.app', ['title' => 'Please Confirm Your Subscriptions', 'description' => 'To get started on the challenge you just need to confirm your subscription.'])

@section('content')
<div class="welcome smiles">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Awesome! You Just Need to Confirm Your Email to Begin.</span></h1>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-block">
						<h2 class="text-center">You should see an email like this in your inbox. If you don't see it, please check your spam folder.</h2>
						<div class="image"><img src="https://s3-us-west-2.amazonaws.com/bitchafit-master/wp-content/uploads/2017/09/13032212/confirm.jpg"></div>
						<h3 class="text-center">Once you confirm your email address the FREE 3-Day Weight Loss Challenge will begin.</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection