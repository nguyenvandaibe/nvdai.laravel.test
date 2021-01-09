@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->content }}</p>
        @comments(['model' => $article])
        
    </div>
@endsection