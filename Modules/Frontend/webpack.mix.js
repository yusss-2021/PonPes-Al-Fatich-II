const mix = require("laravel-mix");
const path = require("path");

mix.js("Modules/Frontend/Resources/assets/js/app.js", "public/js/frontend.js")
    .sass(
        "Modules/Frontend/Resources/assets/sass/app.scss",
        "public/css/frontend.css"
    )
    .setPublicPath("public");

// Optionally, enable versioning in production
if (mix.inProduction()) {
    mix.version();
}
