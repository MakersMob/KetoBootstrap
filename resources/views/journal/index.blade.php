@extends('layouts.app')

@section('content')
<section class="welcome">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Your Journal Entries</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="container">
		<div class="row">
			@foreach($journals as $journal)
				<div class="col-12">
					<h5>On {{ date('F jS, Y', strtotime($journal->created_at))}}</h5>
				</div>
				<div class="col-12 col-lg-8 post">
					@isset($journal->emotions)
						<p><strong>You were feeling...</strong></p>
						{!! $journal->emotions !!}
					@endisset
					@isset($journal->food)
						<p><strong>You ate...</strong></p>
						{!! $journal->food !!}
					@endisset
					@isset($journal->hiccups)
						<p><strong>You experienced the following hiccups...</strong></p>
						{!! $journal->emotions !!}
					@endisset
					@isset($journal->wins)
						<p><strong>You celebrated the following wins...</strong></p>
						{!! $journal->wins !!}
					@endisset
				</div>
				<div class="col-12 col-lg-4">
					<table class="table">
						@isset($journal->sleep)
							<tr>
								<td>Sleep</td> 
								<td>{{$journal->sleep}} hours</td>
							</tr>
						@endisset
						@isset($journal->weight)
							<tr>
								<td>Weight</td> 
								<td>{{$journal->weight}} lbs</td>
							</tr>
						@endisset
						@isset($journal->waist)
							<tr>
								<td>Waist</td> 
								<td>{{$journal->waist}} inches</td>
							</tr>
						@endisset
						@isset($journal->hips)
							<tr>
								<td>Hips</td> 
								<td>{{$journal->hips}} inches</td>
							</tr>
						@endisset
						@isset($journal->thighs)
							<tr>
								<td>Thighs</td> 
								<td>{{$journal->thighs}} inches</td>
							</tr>
						@endisset
						@isset($journal->butt)
							<tr>
								<td>Butt</td> 
								<td>{{$journal->butt}} inches</td>
							</tr>
						@endisset
						@isset($journal->chest)
							<tr>
								<td>Chest</td> 
								<td>{{$journal->chest}} inches</td>
							</tr>
						@endisset
						@isset($journal->arms)
							<tr>
								<td>Arms</td> 
								<td>{{$journal->arms}} inches</td>
							</tr>
						@endisset
					</table>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection