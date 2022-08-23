let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.heade .navbar');
menu.onclick = ()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};