
var gulp       = require('gulp');
var gutil      = require('gulp-util');
var concat     = require('gulp-concat');
var sass       = require('gulp-ruby-sass');
var autoprefix = require('gulp-autoprefixer');
var uglify     = require('gulp-uglify');
var exec       = require('child_process').exec;

// Where do you store your Sass files?
var sassDir = 'assets/scss';

// Which directory should Sass compile to?
var targetCSSDir = 'dist/assets/css';

gulp.task('css', function () {
    return gulp.src(sassDir + '/styles.scss')
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
});

// Generate site
gulp.task('gen', function() {
    exec('php bin/generate.php', function(error, stdout) {
        console.log(stdout);
    });
});

// Keep an eye on Sass and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['css']);
    gulp.watch('views/**/*.blade.php', ['gen']);
});
