<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);
    $operacao = $_POST['operacao'];
    $resultado = '';

    // Verifica qual operação realizar
    switch ($operacao) {
        case 'soma':
            $resultado = $numero1 + $numero2;
            $mensagem = "O resultado da soma de $numero1 + $numero2 é $resultado.";
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            $mensagem = "O resultado da subtração de $numero1 - $numero2 é $resultado.";
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            $mensagem = "O resultado da multiplicação de $numero1 * $numero2 é $resultado.";
            break;
        case 'divisao':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $mensagem = "O resultado da divisão de $numero1 ÷ $numero2 é $resultado.";
            } else {
                $mensagem = "Erro: Divisão por zero não é permitida.";
            }
            break;
        default:
            $mensagem = "Operação inválida.";
            break;
    }

    // Redireciona para o arquivo HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
