/**
*
* Script de perfil
*
* @author Code Universe
*
**/
(function($, URL){

	function verificarEmail(email){
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  		return regex.test(email);
  	}

	function enviarContato(){
		
		var form = $("form#form-contato").serialize();
		// Passar formulário para php usando ajax
	}

	function verificarFormContato(){

		var nome 		= $('#form-contato #nome').val();
		var fone 		= $('#form-contato #fone').val();
		var email 		= $('#form-contato #email').val();
		var mensagem 	= $('#form-contato #mensagem').val();

		if(nome == ""){
			swal("Aviso", "Informe o nome", "warning");
			return false;
		}else if(fone == ""){
			swal("Aviso", "Informe o telefone", "warning");
			return false;
		}else if(email == "" || !verificarEmail(email)){
			swal("Aviso", "E-mail vázio ou incorreto", "warning");
			return false;
		}else if(mensagem == ""){
			swal("Aviso", "Informe uma mensagem", "warning");
			return false;
		}

		return true;
	}

	function clicks(){

		$("#btn-enviar-contato").click(function() {
		 	if(verificarFormContato()){
		 		enviarContato();
		 	}
		});

	}

	function masks(){
		$('#form-contato #fone').mask('(99) 99999-9999');
		$('#form-contato #cpf').mask('999.999.999-99');
	}

	$(document).ready(function() {
		clicks();
		masks();

	});

})($, URL);