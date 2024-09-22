<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os números do formulário
    $numeroA = floatval($_POST['numero1']);
    $numeroB = floatval($_POST['numero2']);

    // Ordena os números
    if ($numeroA > $numeroB) {
        $resultado = "$numero1, $numero2";
    } else {
        $resultado = "$numero1, $numero2";
    }

    // Redireciona de volta para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode("Os números em ordem crescente são: $resultado"));
    exit();
}
