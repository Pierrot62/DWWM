var carre=document.getElementById("carre");
var ButonUp=document.getElementById("up");
var ButtonDown=document.getElementById("down");
var ButonLeft=document.getElementById("left");
var ButonRight=document.getElementById("right");

function deplace (dLeft,dTop)
{
    var styleCarre=window.getComputedStyle(carre,null);
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    carre.style.top=parseInt(topActuel)+dTop+"px";
    carre.style.left=parseInt(leftActuel)+dLeft+"px"; 
}

ButonUp.addEventListener("click",function(){
    deplace(0,-5);
});
ButtonDown.addEventListener("click",function(){
    deplace(0,5);
});
ButonLeft.addEventListener("click",function(){
    deplace(-5,0);
});
ButonRight.addEventListener("click",function(){
    deplace(5,0);
});