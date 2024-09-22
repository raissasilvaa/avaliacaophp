<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>RESULTADO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #007BFF;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Resultado da Verificação</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        if ($numero < 0) {
            echo "<p>Número negativo</p>";
        } elseif ($numero == 0) {
            echo "<p>Igual a zero</p>";
        } else {
            echo "<p>Número positivo</p>";
        }
    } else {
        echo "<p>Por favor, envie um número.</p>";
    }
    ?>
    <a href="Exercicio1.html">TENTE NOVAMENTE </a><br><br>
    <a href="index.html">RETORNE À PÁGINA INICIAL</a>
</body>
</html>
