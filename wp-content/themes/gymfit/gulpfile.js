/* eslint-disable */
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const uglify = require('gulp-uglify');
const eslint = require('gulp-eslint');
const babel = require('gulp-babel');
const livereload = require('gulp-livereload');
const imagemin = require('gulp-imagemin');

gulp.task('sass:dev', function () {
    var plugins = [
        autoprefixer({browsers: ['last 2 version']}),
        cssnano({zindex: false})
    ];

    return gulp.src('assets/src/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss(plugins))
        .pipe(sourcemaps.write())
        .pipe(livereload())
        .pipe(gulp.dest('./assets/src/css'))
});

gulp.task('sass:prod', function () {
    var plugins = [
        autoprefixer({browsers: ['last 2 version']}),
        cssnano()
    ];

    return gulp.src('assets/src/sass/**/*.scss')
        .pipe(sass())
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./assets/css'))
});

gulp.task('watch', ['sass:dev'], function () {
    livereload.listen(35729);
    gulp.watch('assets/src/sass/**/*.scss', ['sass:dev']);
    gulp.watch('assets/src/js/*.js', ['js:dev']);
});

gulp.task('js:dev', function(){
    return gulp.src('assets/src/js/**/*.js')
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(livereload())
    .pipe(gulp.dest('./assets/src/js'))
});

gulp.task('js:prod', function(){
    return gulp.src('assets/src/js/**/*.js')
    .pipe(babel({
        presets: ['env']
    }))
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js')) 
});

gulp.task('fonts', function(){
    return gulp.src('assets/src/fonts/**')
    .pipe(gulp.dest('./assets/fonts')) 
});

gulp.task('lib', function(){
    return gulp.src('assets/src/lib/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./assets/lib')) 
});

gulp.task('images', function(){
    return gulp.src('assets/src/img/**')
    .pipe(imagemin({
        interlaced: true,
        progressive: true,
        optimizationLevel: 5,
        svgoPlugins: [{removeViewBox: true}]
    }))
    .pipe(gulp.dest('./assets/img')) 
});

gulp.task('dev', ['sass:dev', 'js:dev', 'watch']);
gulp.task('build', ['sass:prod', 'js:prod', 'fonts', 'lib', 'images']);