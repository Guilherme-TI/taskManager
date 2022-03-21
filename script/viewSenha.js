const senha = document.getElementById("senha");
const click = document.getElementById("click");

function clicou(){
    let viewSenha = senha.type == "password";

    if(viewSenha){
        showPassword();
    }else{
        hidePassword();
    }

    function showPassword(){
        senha.setAttribute("type", "text");
        click.setAttribute("src", "img/ocultar.png");
    }

    function hidePassword(){
        senha.setAttribute("type", "password");
        click.setAttribute("src", "img/visualizar.png");
    }
}