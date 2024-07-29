

function mouseOverMalecon(){
    document.getElementById("txt-malecon").style.cssText = "display: flex";
    document.getElementById("button-malecon").style.cssText = "display: flex";
    document.getElementById("malecon").style.cssText = "margin: 12%";
    document.getElementById("articuloMalecon").style.cssText = "background-color: #282828; color: white";
    
}
function mouseOutMalecon(){
    document.getElementById("txt-malecon").style.cssText = "display: none";
    document.getElementById("button-malecon").style.cssText = "display: none";
    document.getElementById("articuloMalecon").style.cssText = "background-color: none; color: black";
    
}

function mouseOverBarrio(){
    document.getElementById("txt-barrio").style.cssText = "display: flex";
    document.getElementById("button-barrio").style.cssText = "display: flex";
    document.getElementById("barrio").style.cssText = "margin: 12%";
    document.getElementById("articuloBarrio").style.cssText = "background-color: #282828; color: white";
}
function mouseOutBarrio(){
    document.getElementById("txt-barrio").style.cssText = "display: none";
    document.getElementById("button-barrio").style.cssText = "display: none";
    document.getElementById("articuloBarrio").style.cssText = "background-color: none; color: black";
    
}