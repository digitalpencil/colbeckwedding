var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var include =  require("gulp-include");

gulp.task('sass', function () {
  return gulp.src('./wp-content/themes/colbeckwedding/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss({
		keepSpecialComments: 1
    }))
    .pipe(gulp.dest('./wp-content/themes/colbeckwedding/'));
});

gulp.task("scripts", function() {
    gulp.src(['./wp-content/themes/colbeckwedding/js/src/scripts.js'])
        .pipe( include() )
        .pipe( gulp.dest("./wp-content/themes/colbeckwedding/js/dist/") )
});

gulp.task('default', ['scripts', 'sass']);

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/colbeckwedding/sass/**/*.scss', ['sass'] );
    gulp.watch('./wp-content/themes/colbeckwedding/js/src/modules/*.js', ['scripts'] );
});