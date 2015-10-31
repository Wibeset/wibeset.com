# Bladerunner: générateur de site statique pour Github Pages avec Blade et gulp.js

Ok, mais pourquoi ne pas avoir utilisé [Jekyll](http://jekyllrb.com/) ? Parce que. Tous mes projets, ou presque, depuis 1 an sont développés avec [Laravel](http://laravel.com) mais il peut s'avérer "overkill" pour un site tel que [Wibeset](http://wibeset.com). Alors le but était de créer un générateur de site statique très très très léger qui m'aiderait à développer et maintenir un site statique efficacement et rapidement.

## Blade à la rescousse!

Un site tel que Wibeset ne nécessite pas beaucoup de HTML et CSS. Reste qu'il y a néanmoins un "layout" qui se répète de page en page. Il n'était pas question copier/coller ce dit layout dans chaque page puisque le 1er commandement est: Tu ne te répèteras point ([DRY](http://en.wikipedia.org/wiki/Don%27t_repeat_yourself)). Étant fan de Laravel, alors pourquoi ne pas utilisé la simplicité de [Blade](http://laravel.com/docs/templates).

<script src="https://gist.github.com/dominicmartineau/a3f984873a510b70001a.js"></script>

## Mais qu'est-ce que [gulp.js](http://gulpjs.com) vient faire dans l'histoire ?

Gulp.js permet de compiler du SASS et du Coffeescript. Il permet aussi la minification... Mais une des fonctionnalités les plus intéressantes est <em>gulp.watch()</em> qui permet d'éxécuter une tâche aussitôt qu'un fichier de type xyz est modifié.

<script src="https://gist.github.com/dominicmartineau/1576a7ad4f957021f1d0.js"></script>

## La mécanique dans la branche master...

Dans la branche <em>master</em>, j'utilise le répertoire <em>dist</em> en tant que subtree pour la branche <em>gh-pages</em>. Je travailles donc dans le master et une fois le site recompilé, je pousse le subtree sur Github.

<script src="https://gist.github.com/dominicmartineau/6bc21eec008854ebdeb8.js"></script>

## Le résultat final

Bladerunner. Un mixte tout simple de PHP, [Blade](http://laravel.com/docs/templates) et [gulp.js](http://gulpjs.com). Utilisez-le comme bon vous semble.

[https://github.com/Wibeset/bladerunner](https://github.com/Wibeset/bladerunner)