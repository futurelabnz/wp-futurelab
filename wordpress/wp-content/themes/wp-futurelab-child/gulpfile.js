'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('sass:dev', function() {
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:prod', function() {
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./assets/sass/**/*.scss', ['sass:dev']);
});

gulp.task('js:dev', function() {
    gulp.src('./assets/js/child.js')
        .pipe(concat('child.min.js'))
        .pipe(sourcemaps.init({ largeFile: true }))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./assets/js'));
});

gulp.task('js:prod', function() {
    gulp.src('./assets/js/child.js')
        .pipe(concat('child.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'));
});

gulp.task('js:watch', function() {
    gulp.watch('./assets/js/child.js', ['js:dev']);
});

gulp.task('all:watch', function() {
    gulp.start('sass:watch');
    gulp.start('js:watch');
});

gulp.task('all:prod', function() {
    gulp.start('sass:prod');
    gulp.start('js:prod');
});
