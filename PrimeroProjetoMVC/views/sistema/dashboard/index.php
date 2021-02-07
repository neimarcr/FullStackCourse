



<?php foreach($this->dados->quizzes as $index => $quiz): ?>
    <div id="quizzesList">
    <ul class="list-group">
        <li class="list-group-item"><a href="<?= $url ?>/jogar_quiz?id=<?= $quiz['idquizzes'] ?>"><?= $quiz['titulo'] ?></a>
        <form>
            <button type="button" class="btn btn-danger btn-sm float-right deletar-quiz" onclick="deletarQuiz(<?= $quiz['idquizzes'] ?>)">Deletar</button>
        </form>
        </li>
        
    </ul>
    </div>

<?php endforeach; ?>
