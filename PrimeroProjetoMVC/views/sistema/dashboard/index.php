



<?php foreach($this->dados->quizzes as $index => $quiz): ?>

    <ul class="list-group">
        <li class="list-group-item"><a href="#"><?= $quiz['titulo'] ?></a></li>
    </ul>
    

<?php endforeach; ?>