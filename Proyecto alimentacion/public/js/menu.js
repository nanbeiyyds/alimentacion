const btn = document.getElementById("menu-Btn");
const menu = document.getElementById("menus");

btn.addEventListener("click", () => {
    menu.classList.toggle("open");
});