@extends('layouts.app')

@section('content')
    <h1 class="text-center text-danger p-5">Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.store', $article->id) }}"><h3 class="text-center">{{$article->name}}</h3></a>
       <p class="text-center"> <a class="nav-link small" href="{{ route('articles.edit', $article->id) }}">Обновить</a></p>
        <p class="text-center"> <a class="nav-link small" href="{{ route('articles.destroy', $article->id) }}"
                                   data-method="delete" rel="nofollow" data-confirm="Вы уверены?">Удалить</a></p>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div class="text-center text-secondary m-md-4">{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
