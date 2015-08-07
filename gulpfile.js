var gulp = require('gulp')
var sass = require('gulp-sass')
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync')
var autoprefixer = require('gulp-autoprefixer')
var sourcemaps = require('gulp-sourcemaps')

var fs = require('fs')
var path = require('path')
var glob = require('glob')

gulp.task('sass', function() {
  gulp.src('scss/*.scss')
    .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('css'))
});

// Optimize Images
gulp.task('images', function() {
  return gulp.src('images/**/*')
    .pipe($.imagemin({
      progressive: true,
      interlaced: true,
      svgoPlugins: [{
        cleanupIDs: false
      }]
    }))
    .pipe(gulp.dest('images'));
});

gulp.task('browser-sync', function() {
    browserSync.init(["css/*.css", "js/*.js"], {
        proxy: "tamarkinauctions.dev", // BrowserSync proxy, change to match your local environment
        host: "localhost"
    });
});

gulp.task('default', ['browser-sync'], function () {
    gulp.watch(["scss/**/*.scss"], ['sass'])
});