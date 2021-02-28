@extends('layouts.app')

@section('content')
    <h1 class="text-center text-danger p-5">Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('article.show', $article->id) }}"><h3 class="text-center">{{$article->name}}</h3></a>

        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div class="text-center text-secondary m-md-4">{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection