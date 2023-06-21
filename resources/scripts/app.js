import domReady from '@roots/sage/client/dom-ready';
import './components/header.js'
import './components/lightbox.js'
import './components/pedigree.js'
import './components/questionnaire.js'

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

const headerMenuItem = document.querySelector("#menu-primary_navigation")
if(headerMenuItem) {
  let newMenuItem = document.createElement('li');
  newMenuItem.classList.add('hover:!bg-transparent', 'hover:scale-105', 'transition-all', 'duration-200')
  newMenuItem.innerHTML = '<a class="text-black h-full w-auto" href=""><img class=" p-4" src="https://cdn.discordapp.com/attachments/537908512601407507/1120978940866076792/logo.png" alt="studio mimir" aria-label=""></a>';
  let menuItems = Array.from(headerMenuItem.childNodes)
  let filteredMenuItems = menuItems.filter((element) => element.value !== undefined)
  let middleNumber = Math.floor(menuItems.length / 2)
  headerMenuItem.insertBefore(newMenuItem, menuItems[middleNumber]);
}
