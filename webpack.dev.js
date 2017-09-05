module.exports = require('./webpack.base.js')({
    devtool: 'source-map',
    entry:   `${__dirname}/src/index`,
    out:     {
        path: `${__dirname}/dist/`,
        file: 'index'
    },
    resolve: [
        `${__dirname}/src`,
        `${__dirname}/src/styles`,
    ],
    alias:   {
        vue: 'vue/dist/vue.js'
    },
    plugins: [

    ],
    rules: []
});
