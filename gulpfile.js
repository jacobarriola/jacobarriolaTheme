var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    browserSync({
        proxy: "jacobarriola.dev"
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('.'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("sass/*.scss", ['sass']);
<<<<<<< HEAD
    gulp.watch("sass/base/*.scss", ['sass']);
    gulp.watch("sass/helpers/*.scss", ['sass']);
    gulp.watch("sass/pages/*.scss", ['sass']);
    gulp.watch("sass/sections/*.scss", ['sass']);
    gulp.watch("sass/vendors/*.scss", ['sass']);
=======
>>>>>>> 5ff64ffe7c1a084f78bccce6e204ff07fc9b8fab
});
