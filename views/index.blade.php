@extends('layout')

@section('content')
<div id="home">
	<section>
		<header>
			<h1>Nous sommes Wibeset.</h1>
		</header>
		<ul class="hidden animated fadeInDown visible" id="social-links">
            <li><a href="/blog" class="blog">Blog</a></li>
            <li><a href="https://twitter.com/Wibeset" class="twitter">Twitter</a></li>
            <li><a href="https://facebook.com/Wibeset" class="facebook">Facebook</a></li>
        </ul>
    </section>
    <section>
    	<header>
    		<h1>Nous développons des solutions web et mobile au Saguenay.</h1>
    	</header>
    	<ul class="hidden animated fadeInDown visible" id="social-links">
            <li><a href="http://lygue.com" class="lygue">Lygue</a></li>
            <li><a href="http://tygue.com" class="tygue">Tygue</a></li>
            <li><a href="http://wibeset.com/tube" class="tube">Tube</a></li>
        </ul>
    </section>
</div>
@endsection