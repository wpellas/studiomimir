import domReady from '@roots/sage/client/dom-ready';
import './components/header.js';
import './components/lightbox.js';
import './components/pedigree.js';
import './components/questionnaire.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
