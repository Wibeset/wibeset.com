@extends('layout')

@section('content')
<section id="blogs">
	<a href="/">..</a>
	<ul>
        @foreach ($articles as $article)
        <li><a href="{{ $article['uri'] }}">{{ $article['title'] }}</a></li>
        @endforeach
    </ul>
</section>
@endsection