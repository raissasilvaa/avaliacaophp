<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe o número do formulário
    $numero = intval($_POST['numero']); // Converte o valor enviado para inteiro
    
    // Função para calcular o fatorial
    function calcularFatorial($num) {
        $fatorial = 1;
        for ($i = $num; $i > 0; $i--) {
            $fatorial *= $i;
        }
        return $fatorial;
    }

    // Verifica se o número é não negativo
    if ($numero >= 0) {
        $sequencia = "";
        // Gera a sequência de multiplicação do fatorial
        for ($i = $numero; $i > 1; $i--) {
            $sequencia .= "$i x ";
        }
        $sequencia .= "1";

        // Calcula o fatorial
        $resultado = calcularFatorial($numero);
        $mensagem = "Fatorial de $numero! = $sequencia = $resultado";
    } else {
        $mensagem = "Por favor, insira um número inteiro não negativo.";
    }

    // Redireciona de volta para a página HTML com o resultado
    header("Location: index.html?resultado=" . urlencode($mensagem));
    exit();
}
