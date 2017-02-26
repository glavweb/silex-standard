var gulp     = require('gulp');
var chokidar = require('chokidar');
var less     = require('gulp-less');
var rename   = require('gulp-rename');
var concat   = require('gulp-concat');
var notify   = require('gulp-notify');

var prefixLessDir = 'app/Resources/less';
var prefixWebDir  = 'web';

var src = {
    less: [
        prefixLessDir + '/vars/variables.less',
        prefixLessDir + '/vars/mixin.less',
        prefixLessDir + '/snippets/**/*.less',
        prefixLessDir + '/snippets/*.less',
        prefixLessDir + '/common/*.less',
        prefixLessDir + '/libs/**/*.less',
        prefixLessDir + '/libs/**/*.css',
        prefixLessDir + '/modules/**/*.less',
        prefixLessDir + '/modules/**/**/*.less',
        prefixLessDir + '/components/**/*.less',
        prefixLessDir + '/components/**/**/*.less'
    ],
    css: prefixWebDir + '/css',
};

// Static Server + watching less/html files
gulp.task('server', ['less'], function() {
    chokidar.watch(src.less, {
        ignored: '',
        persistent: true,
        ignoreInitial: true
    }).on('all', function(event, path) {
        gulp.start('less');
    });
});

// Compile LESS
gulp.task('less', function () {
    return gulp.src(src.less)
        .pipe(concat('style.less'))
        .pipe(less())
        .on('error', notify.onError(function (error) {
            return '\nError! Look in the console for details.\n' + error;
        }))
        .pipe(rename('template.css'))
        .pipe(gulp.dest(src.css))
    ;
});

gulp.task('default', ['server', 'less']);
