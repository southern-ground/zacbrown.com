var dir = "../wordpress",
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    yargs = require('yargs'),
    sourcemaps = require('gulp-sourcemaps'),
    src = './scss/**',
    dest = './wordpress/wp-content/themes/zbc/';

gulp.task('sass', function() {
	var prod = yargs.argv.prod || false;
	var options = {
		errLogToConsole: true,
		outputStyle: prod ? 'compressed' : 'expanded'
	};
  return gulp.src([src+'/*.scss', '!'+src+'/_*.scss'])
	  .pipe(sourcemaps.init())
	  .pipe(sass(options).on('error', sass.logError))
	  .pipe(sourcemaps.write())
	  .pipe(gulp.dest(dest));
});

gulp.task('watch', function(){
	sass();
	gulp.watch(src+'/*.scss', ['sass']);
});

gulp.task('default', ['watch']);