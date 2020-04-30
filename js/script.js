//Scroll To Top Button
var scrollTop = document.getElementById("scrollTop");
var head = document.getElementById("head");

window.onscroll = function(){
    scrollfunction();
    headerLinks();
};
function scrollfunction(){
    if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
        scrollTop.style.display = "block";
    } else {
        scrollTop.style.display = "none";
    }
}

function headerLinks(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        document.getElementById('head').style.opacity = "0";
        document.getElementById('head-alt').style.opacity = "1";
        document.getElementById('head-alt').style.zIndex = "1";
    } else {
        document.getElementById('head').style.opacity = "1";
        document.getElementById('head').style.zIndex = "1";
        document.getElementById('head-alt').style.zIndex = "0";
        document.getElementById('head-alt').style.opacity = "0";
    }
}

var dropDown = function(){
    document.querySelector(".nav-links").classList.toggle("show-nav-links");
    document.querySelector(".overlay").classList.toggle("showOverlay");
}

function closeNav(){
    document.querySelector('.show-nav-links').style.display = "none";
}

//Get current date
document.getElementById("currentDate").innerHTML = (new Date().getFullYear());