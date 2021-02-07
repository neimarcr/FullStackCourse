
<h2>Criar um quiz</h2>
<div id="addPergunta">
<form action="" method="post" id="form-quiz">
<div class="form-group">
    <label  for="tituloQuiz"><strong> Titulo do Quiz</strong></label>
    <input class="form-control" v-model="titulo" type="text" id="tituloQuiz" name="tituloQuiz">
</div>
    <div class="border px-5 py-3"
    v-for="(applicant, counter) in applicants"
    v-bind:key="counter">
        <div class="form-group ">
            <label  for="perguntaQuiz"><h4>Pergunta {{ counter + 1 }}</h4></label>
            <input class="form-control perguntaQuiz" type="text" id="perguntaQuiz" name="perguntaQuiz" v-model="applicant.pergunta">
        </div>

        <div class="form-group">
            <label  for="alternativa1">Alternativa 1</label>
            <input class="form-control alternativaQuiz" type="text" id="alternativa1"  v-model="applicant.alternativa1">
        </div>

        <div class="form-group">
            <label  for="alternativa2">Alternativa 2</label>
            <input class="form-control alternativaQuiz" type="text" id="alternativa2"  v-model="applicant.alternativa2">
        </div>
         
        <div class="form-group">
            <label  for="alternativa3">Alternativa 3</label>
            <input class="form-control alternativaQuiz" type="text" id="alternativa3"  v-model="applicant.alternativa3">
        </div>

        <div class="form-group">
            <label for="alternativa4">Alternativa 4</label>
            <input class="form-control alternativaQuiz" type="text" id="alternativa4"  v-model="applicant.alternativa4">
        </div>

        <div class="form-group">
            <label  for="alternativa5">Alternativa 5</label>
            <input class="form-control alternativaQuiz" type="text" id="alternativa5"  v-model="applicant.alternativa5">
        </div>
        
        <div class="form-group">
        <label for="correta">Qual a alternativa correta?</label>
        <select name="correta" id="correta" class="form-control" v-model="applicant.correta">
            <option value="alternativa1">Alternativa 1</option>
            <option value="alternativa2">Alternativa 2</option>
            <option value="alternativa3">Alternativa 3</option>
            <option value="alternativa4">Alternativa 4</option>
            <option value="alternativa5">Alternativa 5</option>
        </select>
        </div>

    </div>
    <div class="p-3 m-1">
    <div class="row mb-2">
        <button type="button" class="btn btn-primary" @click="addPergunta()">Adicionar outra pergunta</button>
    </div>
    <div class="row my-2">
        <button type="button" class="btn btn-success float-right mb-5" id="btn-enviar-quiz" @click="salvarQuiz()">Salvar</button>
    </div>
    </div>
</form>
</div>
<h1 id="testeh1"></h1>

