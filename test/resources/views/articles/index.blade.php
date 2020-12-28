@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="w-75">
			@isset($articles)
				@foreach($articles as $article)
					<ul class="pl-0" style="list-style-type: none;">
						<li>
							<a href="javascript:void(0)">
								<h4>{{ $article->title }}</h4>
							</a>
							<br>
							<a href="javascript:void(0)" class="like-article" data-id="{{ $article->id }}" data-href="{{ route('articles.like', ['id' => $article->id]) }}">Like</a>
							<a href="javascript:void(0)">Comment</a>
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
