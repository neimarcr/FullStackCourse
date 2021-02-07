<?php

var_dump($this->dados->quiz);
echo "<br>";
echo "<br>";
var_dump($this->dados->perguntas_quiz);
echo "<br>";
echo "<br>";
var_dump($this->dados->alternativas);
?>


<h1>QUIZ: <?= $this->dados->quiz['titulo']; ?></h1>

<?php foreach ($this->dados->perguntas_quiz as $index => $pergunta): ?>

    <h2><?= $pergunta['titulo'] ?></h2>
    <?php foreach ($this->dados->alternativas as $indexAl => $alternativa): ?>
        <input type="radio" id="<?= $alternativa[0]['idalternativas'] ?>" name="alternativas" 
        value="<?= $alternativa[0]['idalternativas'] ?>">
        <label for="<?= $alternativa[0]['idalternativas'] ?>"><?= $alternativa[0]['descricao'] ?></label>
    <?php endforeach; ?>
<?php endforeach; ?>

