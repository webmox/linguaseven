'use strict';

var gulp = require('gulp'),//îñíîâíîé ïëàãèí gulp
    watch = require('gulp-watch'),//ðàñøèðåíèå âîçìîæíîñòåé watch
    browserSync = require("browser-sync"),//livereload
    reload = browserSync.reload,//livereload
    gutil = require('gulp-util'), //ëîãèðîâàíèå, ïîäñâåòêà âûâîäà â êîíñîëè
    notify = require("gulp-notify"),// âñïëûâàþùèå ñîîáùåíèÿ
    plumber = require('gulp-plumber'),//ïðåäîõðàíèòåëü äëÿ îñòàíîâêè ãàëüïà
    sftp = require('gulp-sftp'),
    gulpIf = require('gulp-if'),
    remember = require('gulp-remember'),
    rigger = require('gulp-rigger'),// ïëàãèí ïîçâîëÿåò õðàíèòü ñòàòè÷íûå ÷àñòè ñàéòà, òàêèå êàê header, footer
    rimraf = require('rimraf'),// î÷èùåíèè êàòàëîãà build
    rename = require("gulp-rename"),//ïåðåèìåíâîàíèå ôàéëîâ
    sass = require('gulp-sass'),//ïðåïðîöåññîð
    prefixer = require('gulp-autoprefixer'), // âåíäîðíûå ïðåôèêñû
    sourcemaps = require('gulp-sourcemaps'),//sourcemaps
    cleanCSS = require('gulp-clean-css'), //ìèíèôèêàöèÿ css
    uglify = require('gulp-uglify'),//ìèíèôèêàöèÿ js
    imagemin = require('gulp-imagemin'),//ìèíèìèçàöèÿ èçîáðàæåíèé
    pngquant = require('imagemin-pngquant'),//ìèíèìèçàöèÿ èçîáðàæåíèé
    spritesmith = require('gulp.spritesmith'),//îáúåäèíåíèå êàðòèíîê â ñïðàéòû
    changed = require('gulp-changed'),//íå ïåðåçàïèñûâàåò íåèçìåíåííûå ôàéëû
    newer = require('gulp-newer');//íå ïåðåçàïèñûâàåò íåèçìåíåííûå ôàéëû

const isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV == 'development';

// =============================================================================//
// ÏÓÒÈ
// =============================================================================//

var path = {
    build: {  //Òóò ìû óêàæåì êóäà ñêëàäûâàòü ãîòîâûå ïîñëå ñáîðêè ôàéëû
        js: 'build/js/',
        css: 'build/css/',
        img: 'build/images/',
        fonts: 'build/fonts/',
    },
    src: {  //Ïóòè îòêóäà áðàòü èñõîäíèêè
        js: 'src/js/main.js', //В стилях и скриптах нам понадобятся только main файлы
        style: 'src/css/main.scss',
        img: 'src/images/**/*.*',  //Ñèíòàêñèñ img/**/*.* îçíà÷àåò - âçÿòü âñå ôàéëû âñåõ ðàñøèðåíèé èç ïàïêè è èç âëîæåííûõ êàòàëîãîâ
        fonts: 'src/fonts/**/*.*',
    },
    watch: {  //Òóò ìû óêàæåì, çà èçìåíåíèåì êàêèõ ôàéëîâ ìû õîòèì íàáëþäàòü
        js: 'src/js/*.js',
        plugins_js: 'src/js/plugins.js',
        style: 'src/css/**/*.scss',
        plugins_styles: 'src/css/plugins.scss',
        img: 'src/images/**/*.*',
        fonts: 'src/fonts/**/*.*',
    },
    clean: './build'
};

// -----------------------------------------------------------------------------
// webserver
// -----------------------------------------------------------------------------

gulp.task('webserver', function () {
    browserSync.init({
        proxy: "linguaseven.loc",
        localOnly: true
        // notify: false
        // http://192.168.1.149:3000 local
    });
});

// -----------------------------------------------------------------------------
// clean
// -----------------------------------------------------------------------------

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

// -----------------------------------------------------------------------------
// style
// -----------------------------------------------------------------------------

gulp.task('style:build', function () {
    return gulp.src(path.src.style)
        .pipe(changed('build/css'))
        .pipe(plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            this.emit('end');
        }))
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['src/css/'],
            errLogToConsole: true
        }))
        .pipe(prefixer({
            browsers: ['last 5 versions'],
            cascade: true
        }))
        .pipe(cleanCSS({compatibility: 'ie8'})) //Ñîæìåì
        .pipe(plumber.stop())
        .pipe(rename({suffix: '.min'}))// ïåðåèìåíóåì ôàéë CSS
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.build.css)) // È â build
        .pipe(reload({stream: true})); //È ïåðåçàãðóçèì ñåðâåð
});

// -----------------------------------------------------------------------------
// PLUGINS CSS
// -----------------------------------------------------------------------------

gulp.task('plugins_styles:build', function () {
    return gulp.src('src/css/plugins.scss')
        .pipe(newer('build/css'))
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['src/css/plugins'],
            errLogToConsole: true
        }))
        .pipe(cleanCSS({compatibility: 'ie8'})) //Ñîæìåì
        .pipe(sourcemaps.write('.'))
        .pipe(rename('plugins.min.css'))    // ïåðåèìåíóåì ôàéë CSS
        .pipe(gulp.dest(path.build.css)) // È â build
        .pipe(reload({stream: true}));   //È ïåðåçàãðóçèì íàø ñåðâåð äëÿ îáíîâëåíèé
});

// -----------------------------------------------------------------------------
// image
// -----------------------------------------------------------------------------

var imgSrc = 'src/images/**';
var imgDest = 'build/images';

gulp.task('image:build', function () {
    return gulp.src(imgSrc)
        .pipe(newer(imgDest))
        .pipe(plumber())
        .pipe(imagemin({   //Ñîæìåì èõ
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(plumber.stop())
        .pipe(gulp.dest(imgDest))
        .pipe(reload({stream: true})); // È ïåðåçàãðóçèì ñåðâåð
});

// -----------------------------------------------------------------------------
// fonts
// -----------------------------------------------------------------------------

gulp.task('fonts:build', function() {
    return gulp.src(path.src.fonts)
        .pipe(newer(path.src.fonts))
        .pipe(gulp.dest(path.build.fonts))
        .pipe(reload({stream: true})); // È ïåðåçàãðóçèì ñåðâåð
});

// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------
// js
// -----------------------------------------------------------------------------

gulp.task('js:build', function () {
    return gulp.src(path.src.js) //Найдем наш main файл
        .pipe(newer('build/js'))
        .pipe(plumber())
        .pipe(rigger()) //Прогоним через rigger
        // .pipe(gulpIf(isDevelopment, sourcemaps.init())) //Инициализируем sourcemap
        .pipe(uglify()) //Сожмем наш js
        // .pipe(gulpIf(isDevelopment, sourcemaps.write())) //Пропишем карты
        .pipe(rename({suffix: '.min'})) // переименуем файл CSS
        .pipe(plumber.stop())
        .pipe(remember('js:build'))
        .pipe(gulp.dest(path.build.js)) //Выплюнем готовый файл в build
        .pipe(reload({stream: true})); //И перезагрузим сервер
});
// -----------------------------------------------------------------------------
// plugins_js
// -----------------------------------------------------------------------------

gulp.task('plugins_js:build', function () {
    return gulp.src('src/js/plugins.js') //Найдем наш файл
        .pipe(newer('build/js'))
        .pipe(rigger()) //Прогоним через rigger
        .pipe(uglify()) //Сожмем наш js
        .pipe(rename({suffix: '.min'})) // переименуем файл CSS
        .pipe(gulp.dest(path.build.js)) //Выплюнем готовый файл в build
        .pipe(reload({stream: true}));   //И перезагрузим наш сервер для обновлений
});


// -----------------------------------------------------------------------------
// build
// -----------------------------------------------------------------------------

gulp.task('build', [
    'js:build',
    'plugins_js:build',
    'style:build',
    'plugins_styles:build',
    'image:build',
    'fonts:build'
]);

// -----------------------------------------------------------------------------
// watch
// -----------------------------------------------------------------------------

gulp.task('watch', function(){
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    watch([path.watch.plugins_js], function(event, cb) {
        gulp.start('plugins_js:build');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });
    watch([path.watch.plugins_styles], function(event, cb) {
        gulp.start('plugins_styles:build');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });

    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});

// -----------------------------------------------------------------------------
// default
gulp.task('default', ['build', 'webserver', 'watch']);