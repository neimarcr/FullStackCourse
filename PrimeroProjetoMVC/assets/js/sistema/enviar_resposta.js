function enviarResposta(){
    let form = document.getElementById("form-resposta").value;
    console.log(form);
};


document.getElementById("enviar-resposta").onclick = enviarResposta;