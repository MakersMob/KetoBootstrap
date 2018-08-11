@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Create a Tag</span></h1>
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
						{!! Form::open(['url' => 'tag']) !!}
							<div class="form-group">
								<label for="tag">Tag</label>
								<input class="form-control" type="text" name="tag" id="tag" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Create Tag</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection