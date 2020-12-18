var carre=document.getElementById("carre");
var action = 0;



document.addEventListener("mousemove",deplace);
console.log();


function deplace(e)
{
    carre.style.top=parseInt(e.clientY)+"px";
    carre.style.left=parseInt(e.clientX)+"px";
}