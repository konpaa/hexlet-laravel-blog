@extends('layouts.app')

@section('content')
    <div class="text-center">
    <h1>{{ $article->name }}</h1>
    <h3 class="m-5">{{ $article->body }}</h3>
    </div>
@endsection
