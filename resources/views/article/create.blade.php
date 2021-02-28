@extends('layouts.app')
@section('content')
{{ Form::model($article, ['url' => route('articles.store')]) }}
@include('article.form')
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
{{ Form::submit('Создать', ['class' => 'btn btn-lg btn-info pull-right']) }}
    </div>
</div>
{{ Form::close() }}
@endsection
