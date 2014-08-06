var gulp = require('gulp'),
	sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	notify = require('gulp-notify'),
	plumber = require('gulp-plumber'),
	concat = require('gulp-concat'),
	livereload = require('gulp-livereload'),
	lr = require('tiny-lr'),
    server = lr();

function onError()
{
	return console.error(arguments);
}

// CSS
gulp.task('styles', function() {
	return gulp.src([
		'source/scss/styles.scss',
		'source/scss/ie.scss'
		])
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(sass())
		.pipe(autoprefixer('last 2 version'))
		.pipe(minifycss())
		.pipe(gulp.dest('public/assets/css'))
		.pipe(livereload(server))
		.pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('copy-scripts', function() {
	gulp.src('source/js/libs/ie_font.js')
		.pipe(gulp.dest('public/assets/js'));
});

// Minify, rename, and move
gulp.task('scripts', ['copy-scripts'], function() {
	return gulp.src([
		'source/js/libs/jquery.js',
		'source/js/libs/run_prettify.js',
		'source/js/plugins.js',
		'source/js/application.js'
		])
		.pipe(concat('bundle.js'))
	    .pipe(uglify())
		.pipe(gulp.dest('public/assets/js'))
		.pipe(livereload(server))
		.pipe(notify({ message: 'Scripts task complete' }));
});

// Default
gulp.task('default', function() {
	gulp.start('styles', 'scripts');
});

// Watch
gulp.task('watch', function() {
	// port 35729 is LiveReload
	server.listen(35729, function (err) {
		if (err) {
			return console.error(err);
		}

		gulp.watch('source/scss/**/*.scss', ['styles']);
		gulp.watch('source/js/**/*.js', ['scripts']);
	});
});
