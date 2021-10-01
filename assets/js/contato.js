let form = document.getElementById("form_contato");
let nome = document.getElementById("nome");
let email = document.getElementById("email");
let fone = document.getElementById("fone");
let assunto = document.getElementById("assunto");
let msg = document.getElementById("msg");

form.addEventListener('submit', submitForm);
nome.addEventListener('blur', validateNome);
email.addEventListener('blur', validateEmail);
fone.addEventListener('blur', validateFone);
assunto.addEventListener('blur', validateAssunto);
msg.addEventListener('blur', validateMsg);
msg.addEventListener('keyup', countMsg);


function validateNome(){
    let div = document.getElementById("erro_nome");
    nome.value = nome.value.trim();
    if(nome.value == "" || nome.value.split(" ").length < 2){
        div.innerHTML = "Preencha o nome completo!";
        div.classList.add("erro_form");
        return false;
    } 
    else{
        div.innerHTML = "";
        div.classList.remove("erro_form");
        return true;
    }
}

function validateEmail(){
    let div = document.getElementById("erro_email");
    email.value = email.value.trim();
    if(email.value == "" || email.value.indexOf("@") == -1){
        div.innerHTML = "Preencha o e-mail corretamente!"; /* melhor seria fazer com expressoes regulares */
        div.classList.add("erro_form");
        return false;
    } 
    else{
        div.innerHTML = "";
        div.classList.remove("erro_form");
        return true;
    }
}

function validateFone(){
    let div = document.getElementById("erro_fone");
   // fone.value = fone.value.trim();
    let expr = /(\(?\d{2}\)?\s)?(\d{4,5}\-?\d{4})/;
    console.log(expr.test(fone.value)); 
    if(!expr.test(fone.value)){
    //if(fone.value == ""){
        div.innerHTML = "Preencha o telefone corretamente!"; /* melhor seria fazer com expressoes regulares */
        div.classList.add("erro_form");
        return false;
    } 
    else{
        div.innerHTML = "";
        div.classList.remove("erro_form");
        return true;
    }
}

function validateAssunto(){
    let div = document.getElementById("erro_assunto");
    if(assunto.selectedIndex == 0){
        div.innerHTML = "Selecione o assunto!"; 
        div.classList.add("erro_form");
        return false;
    } 
    else{
        div.innerHTML = "";
        div.classList.remove("erro_form");
        return true;
    }
}

function validateMsg(){
    let div = document.getElementById("erro_msg");
    if(msg.value == ""){
        div.innerHTML = "A mensagem não pode ser vazia!"; 
        div.classList.add("erro_form");
        return false;
    } 
    else{
        div.innerHTML = "";
        div.classList.remove("erro_form");
        return true;
    }
}

function submitForm(event){
    if(!(validateNome() && validateEmail() && validateFone() && validateAssunto() && validateMsg())){
        event.preventDefault();
    }
    else{
        alert("Dados OK para envio ao back-end!");
    }
}

function countMsg(){
    if(msg.textLength > 100){
        msg.value = msg.value.substring(0, msg.value.length-1);
    }
    document.getElementById("contagem").innerHTML = msg.textLength + "/100";
}