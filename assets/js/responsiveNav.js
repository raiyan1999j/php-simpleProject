const menuArea = document.getElementById("menuArea");
const menuIcon = document.getElementById("menuIcon");
let toggle = false;

function menuBtn(){
    toggle = !toggle;

    if(toggle){
        menuArea.classList.remove("left-[-100%]");
        menuArea.classList.add("left-[0%]");

        menuIcon.classList.remove("ri-menu-line");
        menuIcon.classList.add("ri-close-line")
    }else{
        menuArea.classList.add("left-[-100%]");
        menuArea.classList.remove("left-[0%]");

        menuIcon.classList.add("ri-menu-line");
        menuIcon.classList.remove("ri-close-line");
    }
}