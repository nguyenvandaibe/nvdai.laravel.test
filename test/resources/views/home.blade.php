@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            New
        </a>
    </div>
</div>
@endsection
