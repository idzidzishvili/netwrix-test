import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import pkg from './package.json';
const { resolve } = require('path')

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
