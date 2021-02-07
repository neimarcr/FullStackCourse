
function deletarQuiz(id_quiz){

    swal({
        title: "Tem certeza?",
        text: "Após deletar, não há como recuperar o quiz!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            let data = new FormData();
            data.append('dados', JSON.stringify({
                'id_quiz': id_quiz,
            }))
            fetch('deletar/quiz', {
                method: 'POST',
                body: data,
            })
            .then((resposta) =>{ 
                console.log(resposta);
                return resposta.json();
                
            })
            .then((retorno) => {
                console.log(retorno);
                if (!retorno.resposta){
                    swal("Aviso", "algo deu errado", "error");
                }
                else {
                    document.location.reload();
                }
            })
        } else {
          swal("Seu quiz continua ativo!");
        }
      });
    }