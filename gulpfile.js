const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
var reload = browserSync.reload;

function style() {
  return gulp
    .src(["./assets/sass/main.scss", "./assets/sass/**/*.scss"])
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(autoprefixer({ browsers: ['last 5 versions'], cascade: false }))
    .pipe(concat("styles.css"))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest("./assets/css"))
    .pipe(reload({stream: true}));
}


function watch() {
  browserSync.init({
    proxy: 'http://opusonedesignbuild.local/',
    notify: true
  });
  gulp.watch('./assets/sass/**/*.scss', style);
  gulp.watch('./**/*.php', php);
  gulp.watch('./assets/js/script.js', js);
}

function php() {
  return gulp
  .src('./**/*.php')
  .pipe(reload({stream: true}));
}
function js() {
  return gulp
  .src('./assets/js/script.js')
  .pipe(reload({stream: true}));
}

exports.style = style;
exports.watch = watch;
