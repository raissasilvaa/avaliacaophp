<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <title>Resultado da Tabuada</title>
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 18px;
            margin: 5px 0;
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
    <h1>Resultado da Tabuada</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = (int)$_POST['numero'];
        echo "<h2>Tabuada do $numero</h2>";
        echo "<ul>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Por favor, envie um número para calcular a tabuada.</p>";
    }
    ?>
    <a href="tabuada.html">TENTE NOVAMENTE</a><br><br>
    <a href="index.html">RETORNE À PÁGINA INICIAL</a> 
</body>
</html>
