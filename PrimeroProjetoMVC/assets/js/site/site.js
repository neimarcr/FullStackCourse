/**
*
* Script de perfil
*
* @author Code Universe
*
**/
(function($, URL){

	function verificarEmail(email){
  		return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
  	}

	function enviarContato(){
		
		const form = $("form#form-contato").serialize();
		// Passar formulário para php usando ajax

		$.ajax({
			url: "enviar/contato",
			type: "POST",
			dataType: "json",
			data: form
		}).done(function(retorno){
			if (retorno.resultado == true){
				swal("Mensagem enviada", retorno.msg, retorno.status);
			} else {
				swal("Aviso", "Erro ao enviar mensagem.", "error");
			}
		}).fail(function(jqXHR, textStatus, msg){
			alert(msg);
		})
	}

	function enviarUsuario(){
		const form = $("form#form-cadastro").serialize();

		$.ajax({
			url: "enviar/usuario",
			type: "POST",
			dataType: "json",
			data: form
		}).done(retorno => {
			if (retorno.resultado == true){
				swal("Sucesso", retorno.msg, retorno.status);
			} else {
				swal("Aviso", "Erro ao cadastrar o usuário", "error");
			}
		}).fail((jqXHR, textStatus, msg) => {
			alert(msg);
		})
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

	function verificarFormCadastro() {
		var nome = $('#form-cadastro #nome').val();
		var cpf = $('#form-cadastro #cpf').val();
		var fone = $('#form-cadastro #fone').val();
		var email = $('#form-cadastro #email').val();
		var senha = $('#form-cadastro #senha').val();
		var confirmarSenha = $('#form-cadastro #confirmarSenha').val();

		if(nome == ''){
			swal("Aviso", "Informe o nome", "warning");
			return false;
		}
		else if (cpf == ''){
			swal("Aviso", "Informe o cpf", "warning");
			return false;
		}
		else if (fone == ''){
			swal("Aviso", "Informe o telefone", "warning");
			return false;
		}
		else if (email == '' || !verificarEmail(email)){
			swal("Aviso", "E-mail vazio ou inválido", "warning");
			return false;
		}
		else if (senha == ''){
			swal("Aviso", "Digite uma senha", "warning");
			return false;			
		}
		else if(confirmarSenha == ''){
			swal("Aviso", "Digite a senha novamente", "warning");
			return false;
		}
		else if(senha !== confirmarSenha){
			swal("Aviso", "As senhas não são iguais", "warning");
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

		$("#btn-enviar-usuario").click(function () {
			if(verificarFormCadastro()){
				enviarUsuario();
			}
		})
	}

	function masks(){
		$('#fone').mask('(99) 99999-9999');
		$('#cpf').mask('999.999.999-99');
	}

	$(document).ready(function() {
		clicks();
		masks();

	});

})($, URL);