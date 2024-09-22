<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe as notas do formulário
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $nota3 = floatval($_POST['nota3']);

    // Calcula a média ponderada
    $media = (($nota1 * 2) + ($nota2 * 2) + ($nota3 * 1)) / 5;

    // Verifica se o aluno está aprovado ou reprovado
    if ($media >= 7) {
        $mensagem = "Média: $media. Aluno Aprovado!";
    } else {
        $mensagem = "Média: $media. Aluno Reprovado.";
    }

    // Redireciona de volta para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
