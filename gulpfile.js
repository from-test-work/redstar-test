var gulp = require('gulp'),
    sass = require('gulp-sass'),
    pug = require('gulp-pug'),
    sourcemaps = require('gulp-sourcemaps'),
    babel = require('gulp-babel'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');

var path = {
    src: {
        /* ===========================  JavaScript files    =========================== */
        js: {
            script: 'src/js/script.js'
        },
        /* ===========================  SCSS files  =========================== */
        scss: {
            style: [
                'src/scss/style.scss',
                'src/scss/_core/**/*.scss',
                'src/scss/_components/**/*.scss',
                'src/scss/_modules/**/*.scss',
                'src/scss/_helpers/**/*.scss'
            ],
            libs: 'src/scss/libs/**/*.scss'
        },
        /* ===========================  Pug files  =========================== */
        templates: 'src/templates/**/*.pug'
    },

    dest: {
        js: {
            script: 'dest/js/'
        },
        css: {
            style: 'dest/css/',
            libs: 'dest/css/libs/'
        },
        templates: 'dest/'
    }
};


/* ===========================  JavaScript files  =========================== */
function jsTask(taskName, src, dest, concatNameFile) {
    gulp.task(taskName, function () {
        gulp.src(src)
            .pipe(sourcemaps.init())
            .pipe(babel({
                presets: ['es2015']
            }))
            .pipe(concat(concatNameFile))
            // .pipe(uglify())
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest(dest));
    });
}

jsTask('dev-jsScript', path.src.js.script, path.dest.js.script, 'script.js');

/* ===========================  SCSS files  =========================== */
function scssTask(taskName, src, dest, name) {
    if (name !== undefined) {
        gulp.task(taskName, function () {
            gulp.src(src)
                .pipe(plumber({
                    errorHandler: notify.onError("Error: <%= error.message %>")
                }))
                .pipe(sass())
                .pipe(rename(name))
                .pipe(autoprefixer({
                    browsers: ['> 1%', 'last 15 versions'],
                    cascade: false
                }))
                .pipe(plumber.stop())
                .pipe(notify("style.scss (DEV) compiled success!"))
                .pipe(gulp.dest(dest));
        });
    } else {
        gulp.task(taskName, function () {
            gulp.src(src)
                .pipe(plumber({
                    errorHandler: notify.onError("Error: <%= error.message %>")
                }))
                .pipe(sass())
                .pipe(autoprefixer({
                    browsers: ['> 1%', 'last 15 versions'],
                    cascade: false
                }))
                .pipe(plumber.stop())
                .pipe(notify("style.scss (DEV) compiled success!"))
                .pipe(gulp.dest(dest));
            // .pipe(browserSync.reload({stream: true}));
        });
    }

}

scssTask('dev-sass', path.src.scss.style, path.dest.css.style, 'template_styles.css');
scssTask('dev-sass-libs', path.src.scss.libs, path.dest.css.libs);


/* ===========================  Templates files  =========================== */
gulp.task('dev-pug', function () {
    return gulp.src(path.src.templates)
        .pipe(plumber({
            errorHandler: notify.onError("Error: <%= error.message %>")
        }))
        .pipe(pug({
            pretty: '\t'
            //debug: true
            //locals: jadedata
        }))
        .pipe(gulp.dest(path.dest.templates));
});

/*============= watch task =============*/
gulp.task('watch', function () {
    gulp.watch(path.src.js.script, ['dev-jsScript']);
    gulp.watch(path.src.scss.style, ['dev-sass']);
    gulp.watch(path.src.scss.libs, ['dev-sass-libs']);
    gulp.watch(path.src.templates, ['dev-pug']);
});
/*============= default task =============*/
gulp.task('default', ['watch']);
