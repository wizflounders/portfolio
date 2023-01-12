const
    gulp = require('gulp'),
    dartSass = require('sass'),
    gulpSass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    cssnano = require('cssnano'),
    browserSync = require('browser-sync').create(),
    csscomb = require('gulp-csscomb'),
    concat = require('gulp-concat'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify');


const sass = gulpSass(dartSass);

const paths = {
    styles: {
        src: 'src/scss/**/*.scss',
        dest: 'dist/css'
    },
    scripts: {
        src: 'src/js/**/*.js',
        dest: 'dist/js'
    }
};

function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(csscomb())
        .pipe(postcss([
            autoprefixer({
                overrideBrowserslist: [
                    '> 1%',
                    'last 2 Chrome major versions',
                    'last 2 Firefox major versions',
                    'last 2 Edge major versions',
                    'last 2 Safari major versions',
                    'ie 11',
                    'last 3 Android major versions',
                    'last 3 ChromeAndroid major versions',
                    'last 2 iOS major versions'
                ],
                cascade: false
            }),
            cssnano({
                preset: ['advanced', {
                    discardComments: {removeAll: true}
                }]
            })]))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream())
}

function scripts() {
    return gulp.src([
        'src/js/script.js',
    ])
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(uglify())
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream())
}

function reload(done) {
    browserSync.reload();
    done();
}

function watch() {
    browserSync.init({
        proxy: "localhost:10018"
    });
    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch('*.php', reload);
    gulp.watch('*/*.php', reload);
}

exports.watch = watch;
exports.style = style;
exports.scripts = scripts;

const build = gulp.parallel(style, scripts, watch);

gulp.task('default', build);