@extends('layouts.app')

@section('content')
<section class="welcome smiles">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Welcome, {{ Auth::user()->name }}!!!</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7 post">
				<p>Welcome to Keto Bootstrap!</p>
				<p>I am so excited to get to know you over the next 28 Days (and beyond), and I am truly blessed to be a part of your new healthy journey! Together over the next few weeks you are going to learn all about nutrition and the importance of living a balanced lifestyle.</p>
				<p>This is the most intense and rewarding challenge. Over the next 28 days your body and mind are going to be tested; you will be pushed harder than you have ever been pushed and achieve more than you have ever achieved. There will be times of triumph and moments of weakness, but together, and with the support of your teammates, I have no doubt that you will be successful in reaching your goals!</p>
				<p>It sounds like you are training for a marathon doesn't it?</p>
				<p>Don't worry you won&rsquo;t have to run anywhere if you don't want to but you will start to quickly find out the habits that you need to change.</p>
				<p>It's not easy creating a whole new lifestyle for yourself but that is what makes this journey so worth it.</p>
				<p>Before you jump right into the <a href="https://ketobootstrap.com/challenge/28-day-weight-loss-challenge">28-Day Weight Loss Challenge</a> I suggest you go through the <a href="https://ketobootstrap.com/challenge/keto-bootcamp">Keto Bootcamp</a> even if you're familiar with Keto.</p>
				<p>If you have any questions in the meantime, please don't hesitate to ask! That's what I'm here for!</p>
				<p>You can reach me at <a href="mailto:support@ketobootstrap.com">support@ketobootstrap.com</a>.</p>
				<p>I am so excited to get to know you over the next few weeks, and again, welcome to Keto Bootstrap! You're going to do incredible!</p>
				<p>- Elisa</p>
			</div>
			<div class="col-12 col-lg-5 post">
				<div class="image">
					<img src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2017/01/14194424/elisa.jpg" data-pin-nopin="true">
				</div>
				<div class="card">
					<div class="card-body">
						<p>Whenever starting any health journey it is important to set some goals so you have something to aim for.</p>
						<p>Please take a second to fill out the form below so that we better understand what you are hoping to achieve in this journey.</p>
						<p>None of this information is shared with anyone else. It just helps the Keto Dash team get you closer to your goals.</p>
						<p><strong>This form will not automatically calculate your macros. It just gives us a reference to look at if you need our help.</strong></p>
						<hr>
						{!! Form::open(['url' => 'goals']) !!}
							<div class="row">
								<fieldset class="col-12">
									<input type="radio" name="gender" value="Female" id="Female" checked><label for="Female"> Female</label>&nbsp;&nbsp;
									<input type="radio" name="gender" value="Male" id="Male"><label for="Male"> Male</label>
								</fieldset>
							</div>
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<label for="age">Age</label>
										<input class="form-control" type="number" name="age" id="age" value="0">
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<label for="height">Height (inches)</label>
										<input class="form-control" type="number" name="height" id="height" value="0">
										<small class="form-text text-muted">ex. 5'2" = 62</small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<label for="weight">Current Weight (lbs)</label>
										<input class="form-control" type="number" name="weight" id="weight" value="0">
										<small class="form-text text-muted">in lbs</small>
									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<label for="weight">Goal Weight (lbs)</label>
										<input class="form-control" type="number" name="goal_weight" id="goal_weight" value="0">
										<small class="form-text text-muted">in lbs</small>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit Information</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('footScripts')
<!-- REFERSION TRACKING: BEGIN -->
<script src="//ketodash.refersion.com/tracker/v3/pub_ff868e671528eedc6a0c.js"></script>
<script>
_refersion(function(){

    _rfsn._addTrans({
        'order_id': '{{ Auth::user()->id }}',
        'shipping': '0.00',
        'tax': '0.00',
        'discount': '0.00',
        'discount_code': '',
        'currency_code': 'USD'
    });

    _rfsn._addCustomer({
        'name': '{{ Auth::user()->name }}',
        'email': '{{ Auth::user()->email }}',
        'ip_address': ''
    });

    _rfsn._addItem({
        'sku': 'Keto Dash Membership',
        'quantity': '1',
        'price': '{{ Auth::user()->join_price }}'
    });

    _rfsn._sendConversion();

});
</script>
<!-- REFERSION TRACKING: END -->
@endsection