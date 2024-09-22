<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe o número do formulário
    $numero = intval($_POST['numero']);

    // Verifica se o número é par ou ímpar
    if ($numero % 2 == 0) {
        $mensagem = "O número $numero é par.";
    } else {
        $mensagem = "O número $numero é ímpar.";
    }

    // Redireciona de volta para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
