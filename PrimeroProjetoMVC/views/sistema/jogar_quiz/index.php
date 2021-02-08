<?php

// var_dump($this->dados->quiz);
// echo "<br>";
// echo "<br>";
// var_dump($this->dados->perguntas_quiz);
// echo "<br>";
// echo "<br>";
// var_dump($this->dados->alternativas);
$count = 0;
?>


<h1>QUIZ: <?= $this->dados->quiz['titulo']; ?></h1>
<form action="enviar/jogo" method="POST" id="form-resposta">
<?php foreach ($this->dados->perguntas_quiz as $index => $pergunta): ?>

    <h2><?= $pergunta['titulo'] ?></h2>
    <?php foreach ($this->dados->alternativas[$count] as $indexAl => $alternativa): ?>

        <input type="radio" id="<?= $alternativa['idalternativas'] ?>" 
        name="<?= $pergunta['idperguntas']; ?>" 
        value="<?= $alternativa['idalternativas'] ?>">
        <label for="<?= $alternativa['idalternativas'] ?>"><?= $alternativa['descricao'] ?></label>
        
    <?php endforeach; $count++; ?>
    
<?php endforeach; ?>
<button type="submit" id="enviar-resposta">Enviar respostas</button>
</form>
