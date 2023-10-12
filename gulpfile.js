const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();

// PATHS
const proxy = "localhost:8888/choice.kirby3.jamesferrell.me/";
const paths = {
  scss: {
    src: "./assets/scss/*.scss",
    dest: "./assets/build/css",
  },
  js: {
    src: "./assets/js/**/*.js",
    dest: "./assets/build/js",
  },
};

// BROWSER SYNC WITH PHP INSIDE SERVER
function sync() {
  browserSync.init({
    watch: true,
    proxy,
  });
}

// TASKS
function compileSass() {
  return src(paths.scss.src)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(rename({ extname: ".min.css" }))
    .pipe(sourcemaps.write())
    .pipe(dest(paths.scss.dest))
    .pipe(browserSync.stream());
}

function compileJs() {
  return src(paths.js.src)
    .pipe(sourcemaps.init())
    .pipe(concat("main.min.js"))
    .pipe(sourcemaps.write())
    .pipe(dest(paths.js.dest))
    .pipe(browserSync.stream());
}

// WATCH
function watchSass() {
  watch(paths.scss.src, compileSass);
}

function watchJs() {
  watch(paths.js.src, compileJs);
}

function watchPhp() {
  watch(["./**/*.html", "./**/*.php"]).on("change", browserSync.reload);
}

// DEFAULT TASK
exports.default = series(
  compileSass,
  compileJs,
  parallel(sync, watchSass, watchJs, watchPhp)
);

// exports.default = parallel(sync, watchPhp);
