<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;
use Carbon\Carbon;
use \Michelf\Markdown;

$dir   = [
	'views' => __DIR__ . '/../views',
	'cache' => __DIR__ . '/../cache',
	'dist'  => __DIR__ . '/../dist'
];

$views = [
	'index'
];

$blade = new Blade($dir['views'], $dir['cache']);

$blade->view()->share([
	'version' => time(),
	'assets'  => 'assets/'
]);

// Home
$html = $blade->view()->make('index');
file_put_contents($dir['dist'] . '/index.html', $html);

// Blog
$articles = json_decode(file_get_contents($dir['views'] . '/blog/articles.json'), true);

$blade->view()->share([
	'assets'  => '../assets/'
]);

$html = $blade->view()->make('blog/index', ['articles' => $articles['articles']]);
file_put_contents($dir['dist'] . '/blog/index.html', $html);

// Blog articles
foreach ($articles['articles'] as $article) {

	$file      = $dir['views'] . '/blog/' . $article['uri'] . '.markdown';

	$blade->view()->share([
		'date' => Carbon::createFromFormat('Ymd', $article['date'])->formatLocalized('%B %d, %Y')
	]);

	$html = $blade->view()->make('blog/article', [
		'content' => Markdown::defaultTransform(file_get_contents($file))
	]);

	file_put_contents($dir['dist'] . '/blog/' . $article['uri'] . '.html', $html);
}
