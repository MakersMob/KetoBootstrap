@extends('layouts.app')

@section('content')
<section class="welcome smiles">
	<div class="container">
		<div class="row">
			<div class="small-12 columns">
				<h1 class="linewrap"><span>Keto Bootstrap Club Members</span></h1>
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
@endsection