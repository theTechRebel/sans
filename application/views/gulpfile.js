
var gulp = require('gulp');

// Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-ruby-sass');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('bower_components/semantic-ui/src/sans/js/*.js')
      .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .on('error',console.error.bind(console))
        .pipe(gulp.dest('bower_components/semantic-ui/dist/sans/js'));
});

//Sass compilation to css
gulp.task('sass', function() {
    return gulp.src('bower_components/semantic-ui/src/sans/sass/*.scss')
        .pipe(rename({suffix: '.min'}))
        .pipe(sass({style: 'compressed'})) //compressed -for production
        .on('error',console.error.bind(console))
        .pipe(gulp.dest('bower_components/semantic-ui/dist/sans/css'));
});

//optimize images
gulp.task('images', function() {
  return gulp.src('bower_components/semantic-ui/src/sans/img/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest('bower_components/semantic-ui/dist/sans/img'));
});


//watch files for changes
gulp.task('watch', function() {

  // Watch .js files
  gulp.watch('bower_components/semantic-ui/src/sans/js/*.js', ['scripts']);

  // Watch .scss files
  gulp.watch('bower_components/semantic-ui/src/sans/sass/*.scss', ['sass']);

  // Watch image files
  gulp.watch('bower_components/semantic-ui/src/sans/img/**/*', ['images']);

});

// Default Task
gulp.task('default', ['scripts','sass','images','watch']);
