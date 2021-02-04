/**
*
* Script de criação de quizzes
*
* 
*
**/



new Vue({
    el: '#addPergunta',
    props: {
        msg: String,
    },
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
            .then(

            )
        }
    },
    
})



    
