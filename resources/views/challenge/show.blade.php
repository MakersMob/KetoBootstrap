@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ $challenge->name }}</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			@if($challenge->users->contains(Auth::user()->id))
				<div class="col-6">
							<form action="https://www.getdrip.com/forms/{{ $challenge->restart_email_form }}/submissions" method="post" data-drip-embedded-form="{{ $challenge->restart_email_form }}">
							    <input class="form-control" type="hidden" id="drip-email" name="fields[email]" value="{{ Auth::user()->email }}" />
							    <button type="submit" class="btn btn-lg btn-block btn-warning">Restart the Challenge</button>
							</form>
						</div>
						<div class="col-6">
							<form action="https://www.getdrip.com/forms/{{ $challenge->stop_email_form }}/submissions" method="post" data-drip-embedded-form="{{ $challenge->stop_email_form }}">
							    <input class="form-control" type="hidden" id="drip-email" name="fields[email]" value="{{ Auth::user()->email }}" />
							    <button type="submit" class="btn btn-lg btn-block btn-danger">Stop the Challenge</button>
							</form>
						</div>
					</div>
			@else
				<div class="col-lg-6">
					<form action="https://www.getdrip.com/forms/{{ $challenge->start_email_form }}/submissions" method="post" data-drip-embedded-form="{{ $challenge->start_email_form }}">
					    <input class="form-control" type="hidden" id="drip-email" name="fields[email]" value="{{ Auth::user()->email }}" />
					    <button type="submit" class="btn btn-lg btn-block btn-primary">Start the Challenge</button>
					</form>
				</div>
				<div class="col-lg-6">
					{!! $challenge->description !!}
				</div>
			@endif
		</div>
	</div>
</section>
@if($challenge->users->contains(Auth::user()->id))
<section class="content post smoke">
	<div class="container">
		<div class="row">
			<div class="col-12">
					<h3>What Happened Today?</h3>
					<p>Keeping track of your ups and downs will help you form a better idea of where you can improve during the challenge.</p>
					<div class="card">
						<div class="card-body">
							{!! Form::open(['url' => 'journal']) !!}
								<div class="form-row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="emotions">How are you feeling today?</label>
											<textarea tabindex="1" class="form-control" id="emotions" name="emotions" rows="6"></textarea>
										</div>
										<div class="form-group">
											<label for="wins">What were today's wins?</label>
											<textarea tabindex="2" class="form-control" id="wins" name="wins" rows="7"></textarea>
										</div>
										<div class="form-group">
											<label for="hiccups">What were today's hiccups?</label>
											<textarea tabindex="3" class="form-control" id="hiccups" name="hiccups" rows="6"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="food">What did you eat today?</label>
											<textarea tabindex="4" class="form-control" id="food" name="food" rows="6"></textarea>
										</div>
										<div class="form-row">
											<div class="col-lg-12">
												<h6>Measurements</h6>
												<p><small><strong>You do not have to do these measurements daily.</strong> In fact, please don't measure daily! Choose an interval and stick with it so you can measure your results. You can select whatever measurements you want to track.</small></p>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="sleep">Hours of Sleep</label>
													<input tabindex="5" class="form-control" type="number" id="sleep" name="sleep" />
												</div>
												<div class="form-group">
													<label for="waist">Waist</label>
													<input tabindex="7" class="form-control" type="number" id="waist" name="waist" />
												</div>
												<div class="form-group">
													<label for="hips">Hips</label>
													<input tabindex="9" class="form-control" type="number" id="hips" name="hips" />
												</div>
												<div class="form-group">
													<label for="arms">Arms</label>
													<input tabindex="11" class="form-control" type="number" id="arms" name="arms" />
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label for="weight">Weight</label>
													<input tabindex="6" class="form-control" type="number" id="waist" name="weight" />
												</div>
												<div class="form-group">
													<label for="thighs">Thighs</label>
													<input tabindex="8" class="form-control" type="number" id="thighs" name="thighs" />
												</div>
												<div class="form-group">
													<label for="butt">Butt</label>
													<input tabindex="10" class="form-control" type="number" id="butt" name="butt" />
												</div>
												<div class="form-group">
													<label for="chest">Chest</label>
													<input tabindex="12" class="form-control" type="number" id="chest" name="chest" />
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="challenge_id" value="{{ $challenge->id }}">
								<button type="submit" class="btn btn-block btn-danger">Submit Journal</button>
							{!! Form::close() !!}
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
@endif
@endsection