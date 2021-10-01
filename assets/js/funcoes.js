function showMenu(){
    menu = document.getElementsByTagName("nav")[0];
    if(menu.style.display == "block")
        menu.style.display = "none";
    else
        menu.style.display = "block";   
}

function closeHelp(){
    document.getElementById("duvidas").style.display = "none";
}

function minHelp(){
    let div = document.getElementById("duvidas");
    div.style.height = "35px";
    let text = document.getElementById("texto");
    text.innerHTML = "Dúvidas?";
}

function maxHelp(){
    let div = document.getElementById("duvidas");
    div.style.height = "150px";
    let text = document.getElementById("texto");
    text.innerHTML = "Dúvidas? Fale com nossos atendentes";
}