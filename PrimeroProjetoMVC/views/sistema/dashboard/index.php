



<?php foreach($this->dados->quizzes as $index => $quiz): ?>
    <div id="quizzes">
    <ul class="list-group">
        <li class="list-group-item"><a href="#"><?= $quiz['titulo'] ?></a>
        <form action="" method="post">
            <button class="btn btn-danger btn-sm float-right deletar-quiz" data-quiz="<?= $quiz['idquizzes'] ?>">Deletar</button>
        </form>
        </li>
        
    </ul>
    </div>

<?php endforeach; ?>
