<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nous développons des solutions web et mobiles au Saguenay - Wibeset</title>
    <meta name="description" content="Wibeset développe des solutions web et mobiles au Saguenay">
    <meta name="keywords" content="wibeset,mobile,développeur,développement,saguenay,chicoutimi,québec,php">
    <link href="//fonts.googleapis.com/css?family=Headland+One" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="all" href="{{ $assets }}css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ $assets }}favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ $assets }}favicon.ico">
</head>
<body class="{!! $bodyClass !!}">

    <a id="contact" href="mailto:hello@wibeset.com">
        <div class="default-state">
            <span><i class="fa fa-envelope"></i></span>
        </div>
        <div class="active-state">
            <span><i class="fa fa-envelope"></i></span>
        </div>
    </a>

    @yield('content')

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-15965090-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

</body>
</html>