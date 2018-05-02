@if(count($errors) > 0)
    @foreach($errors->all() as $error)
		<div class="alert alert-danger">
			@foreach($error->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
    @endforeach
@endif

@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{ \session::get('success') }}</p>
	</div>
@endif
