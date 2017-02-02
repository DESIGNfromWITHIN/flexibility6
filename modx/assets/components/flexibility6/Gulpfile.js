// npm install gulp gulp-util gulp-sass gulp-uglify gulp-rename gulp-minify-css gulp-notify gulp-concat --save-dev

var gulp = require('gulp');  
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var minifycss = require('gulp-minify-css');
var concat = require('gulp-concat');

gulp.task('scripts', function() {
  return gulp.src([
        'js/vendor/jquery.js',
        'js/vendor/what-input.js',
        'js/vendor/foundation.js',
        'js/main.js'
    ])
    .pipe(concat('main.js'))
    .pipe(gulp.dest('production'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('production'));
});

gulp.task('sass', function () {  
    gulp.src('sass/style.scss')
    .pipe(sass({
    	includePaths: ['sass'].concat()
    }))
    .pipe(gulp.dest('production'))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(minifycss())
    .pipe(gulp.dest('production'));
});

gulp.task('default', ['sass'], function () {
    gulp.watch(['sass/*.scss', 'sass/**/*.scss'], ['sass'])
    gulp.watch(['js/main.js'], ['scripts']);
});