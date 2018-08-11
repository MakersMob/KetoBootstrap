@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Create an Ingredient</span></h1>
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
						{!! Form::open(['url' => 'ingredient']) !!}
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" id="name" required>
							</div>
							<div class="form-group">
								<label for="link">Link</label>
								<input class="form-control" type="text" name="link" id="link">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="description" rows="8">
								</textarea>
							</div>
							<div class="form-group">
								<label for="image">Image</label>
								<input class="form-control" type="file" name="image" id="image" >
							</div>
							<button type="submit" class="btn btn-primary btn-block">Create Ingredient</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection