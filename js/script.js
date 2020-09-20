//Scroll To Top Button
var scrollTop = document.getElementById("scrollTop");
var head = document.getElementById("head");

window.onscroll = function(){
    scrollfunction();
};
function scrollfunction(){
    if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150){
        scrollTop.style.display = "block";
    } else {
        scrollTop.style.display = "none";
    }
}


//Get current date
document.getElementById("currentDate").innerHTML = (new Date().getFullYear());

function openSideNav(){
    document.querySelector(".side-nav").style.width = "35%";
    document.querySelector(".overlay").style.visibility = "visible";
    document.querySelector(".overlay").style.backgroundColor = "rgba(0, 0, 0, 0.6)";
    document.querySelector(".overlay").style.zIndex = "2";
}
function closeSideNav(){
    document.querySelector(".side-nav").style.width = "0";
    document.querySelector(".overlay").style.visibility = "hidden";
    document.querySelector(".overlay").style.backgroundColor = "rgba(0, 0, 0, 0)";
    document.querySelector(".overlay").style.zIndex = "1";
}