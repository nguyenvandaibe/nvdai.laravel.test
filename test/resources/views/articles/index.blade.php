@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="w-75">
			@isset($articles)
				@foreach($articles as $article)
					<ul class="pl-0" style="list-style-type: none;">
						<li>
							<a href="#">{{ $article->title }}</a>
						</li>
					</ul>
				@endforeach
			@else
				<div class="alert alert-warning" role="alert">
				  	There is no articles.
				</div>
			@endisset
		</div>
	</div>
@endsection
