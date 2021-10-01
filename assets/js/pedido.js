/* opcoes de tamanho x quantidade de opcoes */
// var sizeOptions = {
//     'b': 1,
//     'p': 2,
//     'm': 2,
//     'g': 3,
//     'gg': 4,
// }

var numOpcoes;

/* funcao chamada quando ocorre mudanca no campo tamanho */
function selectSize(){
    let selectedSize = document.getElementById("tamanho").value;
    if(selectedSize == ""){
        document.getElementById("opcoes_pedido").style.display = "none";
    }
    else{
        document.getElementById("opcoes_pedido").style.display = "block";
      //  document.getElementById("limiteSabores").innerHTML = sizeOptions[selectedSize];
        document.getElementById("numSabores").innerHTML = 0;

        // ajax
        let req = new XMLHttpRequest();
        req.open("GET", "ajax/tamanho.php?sigla="+selectedSize, true);
        req.send();
        req.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                let dados = JSON.parse(this.responseText);
                document.getElementById("mostraPreco").innerHTML = dados.preco;
                document.getElementById("limiteSabores").innerHTML = dados.numOpcoes;
                document.getElementById("preco").value = dados.preco;
                document.getElementById("codTamanho").value = dados.codigo;
                document.getElementById("nomeTamanho").value = dados.nome;
            }
        };
        // fim ajax

        // limpar todos os checkboxes
        let checks = document.getElementsByName("sabores[]");
        for(let i = 0; i < checks.length; i++)
            checks[i].checked = false;
            
        // retirar estilo selecionado de todas as divs
        let divs = document.getElementsByClassName("sabor");
        for(let i = 0; i < divs.length; i++)    
            divs[i].classList.remove("selecionado");
    }
}

// associa funcao ao evento change do campo tamanho
document.getElementById("tamanho").addEventListener('change', selectSize);

/* funcao auxiliar que realiza a contagem de checkboxes selecionados */
function countSelected(){
    let total = 0;
    let checks = document.getElementsByName("sabores[]");
    for(let i = 0; i < checks.length; i++){
        if (checks[i].checked)
            total++;
    }
    return total;
}

/* funcao chamada quando um checbox for marcado/desmarcado */
function updateCount(){
    let selectedSize = document.getElementById("tamanho").value;
    let total = countSelected();
    document.getElementById("numSabores").innerHTML = total;
    if(total > numOpcoes){
        alert("Você ultrapassou o número de sabores permitido");
    }
}

/* funcao que alterna entre os estilos de sabor selecionado ou nao selecionado */
function toggleSelected(event){
    let id = event.target.value;
    let div = document.getElementById("flavor"+id);
    if(div.classList.contains("selecionado"))
        div.classList.remove("selecionado");
    else
        div.classList.add("selecionado");    
}

// associa funcoes evento click dos checkboxes
let checks = document.getElementsByName("sabores[]");
for(let i = 0; i < checks.length; i++){
    checks[i].addEventListener('click', updateCount);
    checks[i].addEventListener('click', toggleSelected);
}


/* funcao que verifica dados antes de submeter ao carrinho */
function addToCart(event){
    let selectedSize = document.getElementById("tamanho").value;
    let total = countSelected();
    if(total > numOpcoes){
        alert("Você ultrapassou o número de sabores permitido");
        event.preventDefault(); // interrompe a submissao do form
    }
    else if (total == 0){
        alert("É necessário selecionar pelo menos 1 sabor!");
        event.preventDefault(); // interrompe a submissao do form
    }    
}

// associa funcao ao evento submit do formulario
document.getElementById("form_pedido").addEventListener('submit', addToCart);