document.addEventListener("scroll",changeNavbar);

function changeNavbar(){
    const navbar=document.querySelector("#mainNavbar");
if (window.scrollY>100) {
    navbar.classList.add("thin");
    mainNavbar.classList.add("bg-black")
}else{
    navbar.classList.remove("thin");
    navbar.classList.remove("bg-black")
}
};