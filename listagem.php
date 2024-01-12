<?php

include_once('config.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_admissao = $_POST['data_admissao'];

    // Se o ID existir, exclui o data de inserção e atualiza o data de atualização
    if (isset($_POST['id']) && $_POST['id'] != '') {
        $id = $_POST['id'];
        $sql = "UPDATE umentor_data SET nome='$nome', email='$email', data_admissao='$data_admissao', data_atualizacao=NOW() WHERE id=$id";
    } else {
        // Se o ID não existir, insere um novo registro
        $sql = "INSERT INTO umentor_data(nome,email,data_admissao, data_insercao, data_atualizacao) 
        VALUES ('$nome','$email','$data_admissao', NOW(), NOW())";
    }

    $result = mysqli_query($conexao, $sql);

    header("Location: listagem.php");
    exit;
}

// Conexão e listagem com a tabela do MySQL

$sql = "SELECT * FROM umentor_data ORDER BY ID ASC";

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umentor</title>
    <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="background">
    <div class="box-padding">
        <div class="box">
            <form action="listagem.php" method="POST">
                <fieldset>
                <h3>Fórmulário de Clientes</h3>
                    <div class="inputBox">
                        <label for="nome" class="labelInput">Nome completo</label>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="inputBox">
                        <label for="email" class="labelInput">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <label for="data_admissao" class="label-input">Data de Admissão:</label>
                    <input type="date" name="data_admissao" id="data_admissao" class="form-control" required>
                    <br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de Admissão</th>
                <th scope="col">Data de Inserção</th>
                <th scope="col">Data de Atualização</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody class="table tbody">
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['data_admissao'] . "</td>";
                echo "<td>" . $user_data['data_insercao'] . "</td>";
                echo "<td>" . $user_data['data_atualizacao'] . "</td>";
                echo "<td><a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                </svg>
                </a><a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                    <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                </svg>
                </a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>