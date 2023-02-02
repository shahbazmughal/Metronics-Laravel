const glob = require('glob');

// Keenthemes' plugins
var componentJs = glob.sync(`resources/_mumara/src/js/components/*.js`) || [];
var coreLayoutJs = glob.sync(`resources/_mumara/src/js/layout/*.js`) || [];

module.exports = [
    ...componentJs,
    ...coreLayoutJs,
];
