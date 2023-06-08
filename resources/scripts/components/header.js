// Header Logic
const openSmallMenu = document.querySelector("#openSmallMenu")
const smallMenu = document.querySelector("#smallMenu")
const closeSmallMenu = document.querySelector("#closeSmallMenu")

if (smallMenu) {
  openSmallMenu.addEventListener("click", () => {
    smallMenu.classList.remove("invisible", "opacity-0", "translate-x-full")
  })
  closeSmallMenu.addEventListener("click", () => {
    smallMenu.classList.add("invisible", "opacity-0", "translate-x-full")
  })
}