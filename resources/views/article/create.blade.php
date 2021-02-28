@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="m-3 list-group">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="list-group-item text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{ Form::model($article, ['url' => route('article.store')]) }}
<div class="form-group">
{{ Form::label('name', 'Название', ['class' => 'col-lg-2 control-label']) }}
{{ Form::text('name', $value = null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
{{ Form::label('body', 'Содержание', ['class' => 'col-lg-2 control-label']) }}
{{ Form::textarea('body', $value = null, ['class' => 'form-control', 'rows' => 10]) }}
</div>
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
{{ Form::submit('Создать', ['class' => 'btn btn-lg btn-info pull-right']) }}
    </div>
</div>
{{ Form::close() }}
@endsection
