@extends('layouts.app', ['title' => 'Alcohol Index: Net Carbs and Calories of your Favorite Alcohols'])

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Alcohol Net Carb Index</span></h1>
			</div>
		</div>
	</div>
</section>
@role('admin')
<section class="content admin">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav">
				  <li class="nav-item">
				    <a class="nav-link btn btn-primary" style="margin-right: 1rem;" href="/alcohol/create">Add Alcohol</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endhasrole
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<table class="table">
					<thead>
						<tr>
							<td>Type</td>
							<td>Name</td>
							<td>Net Carbs</td>
							<td>Calories</td>
						</tr>
					</thead>
					<tbody>
						@foreach($alcohols as $alcohol)
							<tr>
								<td>{{$alcohol->type }}</td>
								<td>{{$alcohol->name}}</a></td>	
								<td>{{$alcohol->net_carbs}}</td>
								<td>{{$alcohol->calories}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $alcohols->links()}}
			</div>
		</div>
	</div>
</section>
@endsection