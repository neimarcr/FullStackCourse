/**
*
* Script de perfil
*
* @author Code Universe
*
**/
(function($, URL){

	function adicionarTarefa(){

		var form = $("form#form-tarefa").serialize();

		$.ajax({
			url: URL + "/enviar/tarefa",
			type: 'POST',
			dataType: "json",
			data: form
		}).done(function(retorno){
			swal({
			  title: "Mensagem",
			  text: retorno.msg,
			  icon:  retorno.status,
			  buttons: false,
			  timer: 3000,
			}).then((value) => {

				if(retorno.status){

					window.location = URL + "/tarefas";

				}
				
			});
		}).fail(function(jqXHR, textStatus, msg){
			alert(msg);
		})

	}

	function deleteTarefa(button){

		$.ajax({
			url: URL + "/delete/tarefa",
			type: 'POST',
			dataType: "json",
			data: {
				id : button.attr('data-id')
			}
		}).done(function(retorno){
			swal({
			  title: "Mensagem",
			  text: "Tarefa excluída com sucesso",
			  icon:  "success",
			  buttons: false,
			  timer: 3000,
			}).then((value) => {

				button.closest("tr").remove();	

				if($('table tbody tr').length == 0){
					$('table').remove();
					$(".header").after('<div class="alert alert-secondary" role="alert">Nenhuma tarefa cadastrada.</div>');
				}	
				
			});
		}).fail(function(jqXHR, textStatus, msg){
			alert(msg);
		})
	}

	$(document).ready(function() {

		$(".btn-add-tarefa").click(function(){
			adicionarTarefa();
		});

		$(".btn-delete-tarefa").click(function(){

			var button = $(this);

			swal({
			  title: "Tem certeza que deseja excluir essa tarefa!",
			  text: "Isso não poderá ser desfeito.",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
			    deleteTarefa(button);
			  } 
			});

		});
	});

})($, URL);