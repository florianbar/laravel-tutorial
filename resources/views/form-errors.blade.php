<!-- Form errors -->
@if (count($errors) > 0)
	<div>
		<h4>Form errors:</h4>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif