@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
        <div class="w-100">
            <a href="{{route('articles.show', ['article' => $article->id])}}">
                <h3 class="font-weight-bold">{{ $article->title }}</h3>
            </a>
            <p>{{ $article->content }}</p>
            
            @comments(['model' => $article])
        </div>
    @endforeach
@endsection