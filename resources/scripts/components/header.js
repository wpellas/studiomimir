// Header Logic
const openSmallMenu = document.querySelector('#openSmallMenu');
const smallMenu = document.querySelector('#smallMenu');
const closeSmallMenu = document.querySelector('#closeSmallMenu');

if (smallMenu) {
  openSmallMenu.addEventListener('click', () => {
    smallMenu.classList.remove('invisible', 'opacity-0', 'translate-x-full');
  });
  closeSmallMenu.addEventListener('click', () => {
    smallMenu.classList.add('invisible', 'opacity-0', 'translate-x-full');
  });
}
// Insert Logo
const headerMenuItem = document.querySelector('#menu-primary_navigation');
if (headerMenuItem && sageData.logoUrl) {
  let newMenuItem = document.createElement('li');
  newMenuItem.classList.add(
    'hover:!bg-transparent',
    'hover:scale-105',
    'transition-all',
    'duration-200'
  );
  newMenuItem.innerHTML = `<a class="text-black h-full w-auto transition-all duration-200" href="${sageData.homeUrl}"><img class="p-4 transition-all duration-200" src="${sageData.logoUrl}" alt="${sageData.siteName}_logotype" aria-label="logotype"></a>`;
  let menuItems = Array.from(headerMenuItem.childNodes);
  let middleNumber = Math.floor(menuItems.length / 2);
  headerMenuItem.insertBefore(newMenuItem, menuItems[middleNumber]);
}
