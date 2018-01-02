@extends('layout')

@section('content')
    <article>
        <a href="http://wibeset.com/blog">..</a>
        <section>
            {!! $content !!}
            <footer>
                &mdash;
                <p>{{ $date }}.</p>
            </footer>
        </section>
    </article>
@endsection
