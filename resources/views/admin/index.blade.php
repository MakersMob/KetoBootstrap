@extends('layouts.app')

@section('content')
<section class="welcome smiles">
	<div class="container">
		<div class="row">
			<div class="small-12 columns">
				<h1>Keto Bootstrap Club Members</h1>
			</div>
		</div>
	</div>
</section>
<section class="content ice">
	<div class="container">
		<div class="row">
			<div class="col-12">
				{!! Form::open(['url' => 'usersearch', 'class' => '']) !!}
					<div class="form-row">
						<div class="col-9 form-group" style="margin-bottom: 0;">
							<label class="sr-only" for="search">Search Users</label>
							<input style="width: 100%" type="text" class="form-control col-12" id="search" name="search" placeholder="Search for a user">
						</div>
						<div class="col-3 form-group" style="margin-bottom: 0;">
							<button type="submit" class="btn btn-primary btn-block">Search</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4>{{ count($users) }} Members</h4>
				<table class="table">
					<thead>
						<tr>
							<td>Name</td>
							<td>Email</td>
							<td>Age</td>
							<td>Height (in.)</td>
							<td>Weight</td>
							<td>Goal Weight</td>
							<td>Protein</td>
							<td>Carbs</td>
							<td>Fat</td>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->age }}</td>
								<td>{{ $user->height }}</td>
								<td>{{ $user->current_weight }}</td>
								<td>{{ $user->goal_weight }}</td>
								<td>{{ $user->protein }}</td>
								<td>{{ $user->carbs }}</td>
								<td>{{ $user->fat }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection