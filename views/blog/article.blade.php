@extends('layout')

@section('content')
<section id="blogs">
	<a href="/blog/">..</a>
	<article>
		{{ $content }}
		<footer>
			&mdash;
			<p>Updated {{ $date }}.</p>
		</footer>
	</article>
</section>
@endsection