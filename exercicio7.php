<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os números do formulário
    $numeroA = floatval($_POST['numeroA']);
    $numeroB = floatval($_POST['numeroB']);

    // Realiza a comparação
    if ($numeroA > $numeroB) {
        $mensagem = "A maior que B";
    } elseif ($numeroA < $numeroB) {
        $mensagem = "A menor que B";
    } else {
        $mensagem = "A é igual a B";
    }

    // Redireciona de volta para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
