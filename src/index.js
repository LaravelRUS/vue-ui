/**
 * Import global styles
 */
import "main.scss";

/**
 * Require polyfill
 */
import "babel-polyfill";

/**
 * Components list
 */
import components from "./components";

/**
 * UI Config
 * @type {{prefix: string, src: string}}
 */
const config = {
    /**
     * Prefix for all ui components
     */
    prefix: 'ui',

    /**
     * Components source directory
     */
    src: './components'
};

if (!(window.Vue || global.Vue)) {
    throw new Error('Vue.js did not loaded.');
}

/**
 * Load Vue components.
 */
for (let name of Object.keys(components)) {
    let path = components[name];
    let component = require(`${config.src}/${path}.vue`);
    let alias = name.indexOf('v-') !== 0
        ? `${config.prefix}-${name}`
        : name;

    Vue.component(alias, component);
}
