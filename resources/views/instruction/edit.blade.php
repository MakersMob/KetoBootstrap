@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Edit Instruction</span></h1>
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
						{!! Form::open(['url' => 'instruction/'.$instruction->id, 'method' => 'patch']) !!}
							<div class="form-group">
								<label for="name">Recipe</label>
								<select class="form-control" name="recipe">
									@foreach($recipes as $recipe)
										<option @if($instruction->recipe_id == $recipe->id) selected @endif value="{{ $recipe->id }}">{{ $recipe->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="description" rows="4">{!! $instruction->description !!}</textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Add Instruction</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection