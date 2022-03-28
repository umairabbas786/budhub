let drawer = document.querySelector("#drawer");
let drawerCloseBtn = document.querySelector("#drawer-close-btn");
openDrawer = () => {
    drawer.classList.add("open-drawer")
    drawerCloseBtn.classList.add("display-close-btn")
}
closeDrawer = () => {
    drawer.classList.remove("open-drawer")
    drawerCloseBtn.classList.remove("display-close-btn")
}