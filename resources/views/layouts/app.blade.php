<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
@include('flash')
<div class="container-md alert-link mt-3">
    <a href="{{ route('welcome.blog') }}">About</a>
    <a class="ml-3" href="{{ route('article.index') }}">Articles</a>
    <a class="ml-3" href="{{ route('article.create') }}">Create</a>
</div>

<div class="container-lg">
    @yield('content')
</div>
</body>
</html>
