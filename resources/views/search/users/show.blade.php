@extends('layouts.app')

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ ucwords($search) }}</span></h1>
				<h2 class="linewrap"><span>Search Results</span></h2>
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
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12">
				@if(count($users) == 0)
					<p>Sorry, no results found.</p>
				@else
					<table class="table">
						<thead>
							<tr>
								<td>Name</td>
								<td>Email</td>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
</section>
@endsection