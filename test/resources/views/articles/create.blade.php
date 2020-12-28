@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('articles.store') }}" method="POST" class="w-75">
			@csrf

			<div class="form-group">
				<label for="title">Title <span class="text-danger">*</span></label>
				<input type="text" name="title" class="form-control" id="title" autofocus="">
			</div>

			<div class="form-group">
				<label for="content">Content <span class="text-danger">*</span></label>
				<textarea id="content" class="form-control" name="content"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
