// Header Logic
const openSmallMenu = document.querySelector("#openSmallMenu")
const smallMenu = document.querySelector("#smallMenu")
const closeSmallMenu = document.querySelector("#closeSmallMenu")

if (smallMenu) {
  openSmallMenu.addEventListener("click", () => {
    smallMenu.classList.toggle("hidden")
  })
  closeSmallMenu.addEventListener("click", () => {
    smallMenu.classList.toggle("hidden")
  })
  
}