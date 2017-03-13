var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minify = require('gulp-minify-css');


gulp.task('jsmin', function(){
   gulp.src(['plugins/jQuery/jquery-2.2.3.min.js','bootstrap/js/bootstrap.min.js','dist/js/angular.js','dist/js/menu_script.js','dist/js/app.js','plugins/slimScroll/jquery.slimscroll.js'])
   .pipe(concat('freniz.jquery.min.js'))
   .pipe(uglify())
   .pipe(gulp.dest('js/'));
});

gulp.task('js', function(){
   gulp.src(['plugins/jQuery/jquery-2.2.3.min.js','bootstrap/js/bootstrap.min.js','dist/js/angular.js','dist/js/menu_script.js','dist/js/app.js','plugins/slimScroll/jquery.slimscroll.js'])
   .pipe(concat('freniz.jquery.js'))
   .pipe(gulp.dest('js/'));
});

gulp.task('cssmin', function(){
   gulp.src(['bootstrap/css/bootstrap.min.css','build/fontawesome/css/font-awesome.css','dist/css/AdminLTE.css','css/style.css','dist/css/skins/_all-skins.min.css'])
   .pipe(concat('freniz.styles.min.css'))
   .pipe(minify())
   .pipe(gulp.dest('css/'));
});

gulp.task('css', function(){
   gulp.src(['bootstrap/css/bootstrap.min.css','build/fontawesome/css/font-awesome.css','dist/css/AdminLTE.css','css/style.css','dist/css/skins/_all-skins.min.css'])
   .pipe(concat('freniz.styles.css'))
   .pipe(gulp.dest('css/'));
});


gulp.task('default',['js','jsmin','css','cssmin'],function(){
});