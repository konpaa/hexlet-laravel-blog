@if ($errors->any())
    <div class="m-3 list-group">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Название', ['class' => 'col-lg-2 control-label']) }}
    {{ Form::text('name', $value = null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Содержание', ['class' => 'col-lg-2 control-label']) }}
    {{ Form::textarea('body', $value = null, ['class' => 'form-control', 'rows' => 10]) }}
</div>
