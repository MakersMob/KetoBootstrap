<div class="card">
	<div class="card-body">
		{!! Form::open(['url' => 'journal']) !!}
			<div class="form-group">
				<label for="entry">What happened today?</label>
				<textarea class="form-control" name="entry" rows="8"></textarea>
			</div>
			<div class="form-group">
				<label for="entry_date">Date (mm/dd/yyyy)</label>
				<input class="form-control" type="date" name="entry_date" id="entry_date" value="{{ date('Y-m-d') }}">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit Entry</button>
		{!! Form::close() !!}
	</div>
</div>