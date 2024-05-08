<?php

    include_once('config.php');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


    if(!empty($id)){
        $query = "SELECT * FROM tb_ficha WHERE id_ficha= $id LIMIT 1";

        $resultado = $conexao->query($query) or die($conexao->error);

        if(($resultado) and (mysqli_num_rows($resultado) != 0)){
            $row_usuario = $resultado->fetch_assoc();
            $retorna = ['status' => true, 'dados' => $row_usuario];
        }else{
            $retorna = ['status' => false, 'msg' => "Erro: Nenhum usuário encontrado! "];
        }
} else {
$retorna = ['status' => false, 'msg' => "Erro: Nenhum usuário encontrado!"];
}

    echo json_encode($retorna);
?>