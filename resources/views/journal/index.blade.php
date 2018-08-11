@extends('layouts.app')

@section('content')
<section class="welcome">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Your Journal Entries</h1>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post">
				@foreach($journals as $journal)
					<div class="journal-entry">
						<h3>{{ date('F j, Y', strtotime($journal->entry_date)) }}</h3>
						{!! $journal->entry !!}
					</div>
				@endforeach
			</div>
			<div class="col-12 col-lg-4 columns">
				<div class="sidebar" data-equalizer-watch>
					<h3>Today&rsquo;s Journal Entry</h3>
					<div class="card">
						<div class="card-block">
							@include('partials.journal')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection