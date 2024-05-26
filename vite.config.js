import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import collectModuleAssetsPaths from "./vite-module-loader.js";

async function getConfig() {
    const paths = ["resources/css/app.css"];

    const allPath = await collectModuleAssetsPaths(paths, "Modules");

    return defineConfig({
        plugins: [
            laravel({
                input: allPath,
                refresh: true,
            }),
        ],
    });
}

export default getConfig;

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//     ],
// });
