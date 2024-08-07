const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function compileSass() {
    return gulp
        .src("./assets/scss/style.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest("./"));
}

function watchSass() {
    gulp.watch("./assets/scss/**/*.scss", compileSass);
}

gulp.task("sass", compileSass);
gulp.task("watch", watchSass);