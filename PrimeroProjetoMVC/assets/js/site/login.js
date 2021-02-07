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

        let data = new FormData();
        data.append('email', $('#form-login #email').val());
        data.append('senha', $('#form-login #senha').val());

        const response = await fetch('verificar/login', {
            method: "POST",
            body: data
        })

        

        let resposta = await response.json();

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

            verificarLoginDB()
            .then((x) => {
                if(verificarLoginJS() && x){
  
                    window.location = "dashboard";
    
                 } else {

                    document.getElementById("login-error").classList.remove('d-none');
    
                 }
            })

		 	
		});
    }

    
	$(document).ready(function() {
        clicks();

	});

})($, URL);