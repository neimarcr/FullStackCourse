/**
*
* Script de criação de quizzes
*
* 
*
**/



new Vue({
    el: '#addPergunta',
    data() {
        return {
            titulo: '',
            applicants: [{
                counter: 0,
                pergunta: '',
                alternativa1: '',
                alternativa2: '',
                alternativa3: '',
                alternativa4: '',
                alternativa5: '',
                correta: '',
            }]
        }
    },
    methods: {
        addPergunta(){
            this.applicants.push({
                pergunta: '',
                alternativa1: '',
                alternativa2: '',
                alternativa3: '',
                alternativa4: '',
                alternativa5: '',
                correta: '',
            })
        },
        salvarQuiz(){

            let data = new FormData();
            data.append('dados', JSON.stringify({
                perguntas: this.applicants,
                titulo: this.titulo
            }))
            fetch('salvar/quiz', {
                method: 'POST',
                body: data,
            })
            .then((resultado) => {
                if (resultado.resposta){
                    swal("Sucesso", "quiz cadastrado com sucesso", "success");
                } else {
                    swal("Erro", "erro ao cadastrar quiz: " + resultado.erro, "error");
                }
            })
        }
    },
    
})



    
