@extends('layouts.app')
@section('content')
    {{ Form::model($article, ['url' => route('articles.update', $article), 'method'=>'PATCH']) }}
    @include('article.form')
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {{ Form::submit('Обновить', ['class' => 'btn btn-lg btn-info pull-right']) }}
        </div>
    </div>
    {{ Form::close() }}
@endsection
