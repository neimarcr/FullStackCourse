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

    function verificarLoginDB() {
        
        let resultadoLogin = false;

        $.ajax({
            url: 'verificar/login',
            type: 'POST',
            dataType: 'JSON',
            async: false,
            data: {
                email: $('#form-login #email').val(),
                senha: $('#form-login #senha').val(),
            }
        }).done(retorno => {
            resultadoLogin = retorno.resultado;
        });
        
        return resultadoLogin;
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
        console.log(URL)
	});

})($, URL);