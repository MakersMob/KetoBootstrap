@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Create a Challenge</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">
						{!! Form::open(['url' => 'challenge']) !!}
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" id="name" required>
							</div>
							<div class="form-group">
								<label for="days">Days</label>
								<input class="form-control" type="number" name="days" id="days" required>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="description" rows="8">
								</textarea>
							</div>
							<div class="form-group">
								<label for="video">Image</label>
								<input class="form-control" type="text" name="video" id="video" >
							</div>
							<div class="form-group">
								<label for="start_email_form">Start Email Form</label>
								<textarea class="form-control" name="start_email_form" rows="8">
								</textarea>
							</div>
							<div class="form-group">
								<label for="restart_email_form">Restart Email Form</label>
								<textarea class="form-control" name="restart_email_form" rows="8">
								</textarea>
							</div>
							<div class="form-group">
								<label for="stop_email_form">Stop Email Form</label>
								<textarea class="form-control" name="stop_email_form" rows="8">
								</textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Create Challenge</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection