<?php 

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM umentor_data WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        // Deletar pelo ID no Banco de Dados

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM umentor_data WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: listagem.php');

?>