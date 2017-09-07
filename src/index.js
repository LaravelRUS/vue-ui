/**
 * Import global styles
 */
import "main.scss";

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

    Vue.component(name, component);
}
