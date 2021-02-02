/**
*
* Script de perfil
*
* @author Neimar Rech
*
**/
(function($, URL){

	function verificarEmail(email){
  		return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
  	}

    async function verificarLoginDB() {


        const response = await fetch('verificar/login', {
            method: "POST",
            body: JSON.stringify(
                {
                    email: $('#form-login #email').val(),
                    senha: $('#form-login #senha').val(),
                }
            )
        })

        let resposta = await response.json();

        // $.ajax({
        //     url: 'verificar/login',
        //     type: 'POST',
        //     dataType: 'JSON',
        //     async: false,
        //     data: {
        //         email: $('#form-login #email').val(),
        //         senha: $('#form-login #senha').val(),
        //     }
        // }).done(retorno => {
        //     resultadoLogin = retorno.resultado;

        // });
        
        console.log(resposta);

        return resposta.resultado;
    }
    
	function verificarLoginJS() {
        const email = $('#form-login #email').val();
        const senha = $('#form-login #senha').val();

        if (!verificarEmail(email) || email == ""){
            swal('Aviso', 'digite um email válido', 'warning');
            return false;
        }
        else if (senha == ''){
            swal('Aviso', 'digite uma senha válida', 'warning');
            return false;
        }

        console.log("verifica");
        return true;
    }

	function clicks(){

		$("#btn-login").click(function() {

		 	if(verificarLoginJS() && verificarLoginDB()){
  
                window.location = "dashboard";

		 	} else {

                $('.error').html("Senha ou email está incorreto").fadeIn();

             }
		});
    }

    
	$(document).ready(function() {
        clicks();

	});

})($, URL);