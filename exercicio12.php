<?php
$host = 'localhost';
$db = 'sistema_alunos';
$user = 'root';
$pass = '';

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    // Consulta SQL
    $sql = "SELECT * FROM alunos WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome LIKE '%$nome%'";
    }

    if (!empty($matricula)) {
        $sql .= " AND matricula = '$matricula'";
    }

    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Curso Horas</th>
                    <th>Carga Horária</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['matricula']}</td>
                    <td>{$row['curso']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['cep']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                    <td>{$row['curso_horas']}</td>
                    <td>{$row['carga_horaria']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum registro encontrado.";
    }
}

$conn->close();
?>
 <?php
$host = 'localhost';
$db = 'sistema_alunos';
$user = 'root';
$pass = '';

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    // Exclusão com base nos critérios inseridos
    $sql = "DELETE FROM alunos WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome = '$nome'";
    }

    if (!empty($matricula)) {
        $sql .= " AND matricula = '$matricula'";
    }

    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Aluno excluído com sucesso!";
        } else {
            echo "Nenhum registro encontrado para excluir.";
        }
    } else {
        echo "Erro ao excluir registro: " . $conn->error;
    }
}

$conn->close();
?>
