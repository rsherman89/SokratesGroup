const gulp = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');


gulp.task('sass', function(){
  return gulp.src('scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
});

// Minifys .css and reload browser.
gulp.task('mini-css', function() {
    return gulp.src('style.css')
    .pipe(cssnano())
    .pipe(gulp.dest('./'));
});

// Compile and minify css.
gulp.task('do-sass', gulp.series('sass', 'mini-css'));


gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', gulp.series('do-sass')); 
  // Other watchers
});