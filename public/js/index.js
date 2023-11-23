
const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');

openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}

function close(){
    mainMenu.style.top = '-100%';
}

var btn = document.getElementsByClassName("btn");
var slide = document.getElementById("slide");
var slide1 = document.getElementById("slide1");

btn[0].onclick = function(){
    slide.style.transform = "translateX(0px)";
    this.style.backgroundColor = "white";
    btn[1].style.backgroundColor = "#2C422C";
    btn[2].style.backgroundColor = "#2C422C";
}
btn[1].onclick = function(){
    slide.style.transform = "translateX(-800px)";
    this.style.backgroundColor = "white";
    btn[0].style.backgroundColor = "#2C422C";
    btn[2].style.backgroundColor = "#2C422C";
}
btn[2].onclick = function(){
    slide.style.transform = "translateX(-1600px)";
    this.style.backgroundColor = "white";
    btn[0].style.backgroundColor = "#2C422C";
    btn[1].style.backgroundColor = "#2C422C";
}


btn[3].onclick = function(){
    slide1.style.transform = "translateX(0px)";
    this.style.backgroundColor = "white";
    btn[4].style.backgroundColor = "#2C422C";
    btn[5].style.backgroundColor = "#2C422C";
}
btn[4].onclick = function(){
    slide1.style.transform = "translateX(-800px)";
    this.style.backgroundColor = "white";
    btn[3].style.backgroundColor = "#2C422C";
    btn[5].style.backgroundColor = "#2C422C";
}
btn[5].onclick = function(){
    slide1.style.transform = "translateX(-1600px)";
    this.style.backgroundColor = "white";
    btn[3].style.backgroundColor = "#2C422C";
    btn[4].style.backgroundColor = "#2C422C";
}

