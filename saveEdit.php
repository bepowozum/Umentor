<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome']; // Supondo que 'nome', 'email' e 'data_admissao' são enviados via POST
        $email = $_POST['email'];
        $data_admissao = $_POST['data_admissao'];
    
        $sqlUpdate = "UPDATE umentor_data SET nome='$nome', email='$email', data_admissao='$data_admissao'
        WHERE id=$id";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: listagem.php');
?>