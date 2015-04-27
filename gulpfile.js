var libdir = 'src/bower_components/';
var outdir = 'public/wp-content/themes/wpang';

var gulp = require('gulp'),
		concat = require('gulp-concat'),
		rename = require('gulp-rename'),
		sass = require('gulp-sass'),
		uglify = require('gulp-uglify'),
		cssmin = require('gulp-cssmin'),
		watch = require('gulp-watch'),
		livereload = require('gulp-livereload');


// dependencies task
gulp.task('vendor', function() {
	return gulp.src([
    	'src/bower_components/modernizr/modernizr.js',
    	'src/bower_components/angular/angular.min.js',
    	'src/bower_components/angular-route/angular-route.min.js',
    	'src/bower_components/angular-animate/angular-animate.min.js'
    ])
    .pipe(concat('lib.js'))
    .pipe(gulp.dest('public/wp-content/themes/wpang/js/'));
});

// scripts task
gulp.task('scripts', function() {
  return gulp.src('src/js/**/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('public/wp-content/themes/wpang/js/'))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('public/wp-content/themes/wpang/js/'))
    .pipe(livereload());
});


// styles task
gulp.task('styles', function() {
  return gulp.src('src/sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/wp-content/themes/wpang/css/'))
    .pipe(cssmin())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('public/wp-content/themes/wpang/css/'))
    .pipe(livereload());
});


// Watch
gulp.task('watch', function() {
	livereload.listen();
  gulp.watch('src/js/**/*.js', ['scripts']);
  gulp.watch('src/sass/**/*.scss', ['styles']);
});


gulp.task('default', ['vendor', 'scripts', 'styles', 'watch']);
