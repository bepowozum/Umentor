<?php

// Conexão com Banco de Dados

include_once('config.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM umentor_data WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {

            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $data_admissao = $user_data['data_admissao'];
        }

    } else {

        header('Location: listagem.php');

    }
} else {

    // Retorna para a listagem caso não tenha o id

    header('Location: listagem.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umentor</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body class="background">
    <div>
        <a class="back" href="listagem.php">← Voltar</a>
    </div>
    <div class="box box-edit">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <div>
               <h3>Editar Registro</h3>
               </div>
                <br>
                <div class="form-group">
                    <!-- Dados inseridos nos campos de input -->
                    <label for="nome" class="label-input">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ?>" required>
                </div>
                <div class="form-group">
                    <!-- Dados inseridos nos campos de input -->
                    <label for="email" class="label-input">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>" required>
                </div>
                <div class="form-group calendar">
                    <label class="label-input" for="data_admissao">Data de Admissão:</label>
                <!-- Dados inseridos nos campos de input -->
                    <input type="date" name="data_admissao" id="data_admissao" value="<?php echo $data_admissao ?>" required>
                </div>

                <!-- Inclui o campo de ID deixando oculto -->
                    <input type="hidden" name="id" value="<?php echo $id?>" >
                <input class="btn btn-primary btn-send" type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>

</html>