<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe o nome e a idade do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $idade = intval($_POST['idade']);

    // Verifica se o usuário é maior ou menor de 18 anos
    if ($idade >= 18) {
        $mensagem = "$nome é maior de 18 e tem $idade anos.";
    } else {
        $mensagem = "$nome não é maior de 18 e tem $idade anos.";
    }

    // Redireciona de volta para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
