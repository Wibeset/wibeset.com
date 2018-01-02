@extends('layout')

@section('content')
    <article>
        <a href="http://wibeset.com">..</a>
        <ul>
            @foreach ($articles as $article)
            <li><a href="http://wibeset.com/blog/{{ $article['uri'] }}">{{ $article['title'] }}</a></li>
            @endforeach
        </ul>
    </article>
@endsection
