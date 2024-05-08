<?php
    include_once('config.php');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITAZE_NUMBER_INT);

    if(!empty($id)){
        $retorna = ['status' => false, 'dados' => $id];
    }else{
        $retorna = ['status' => false, 'msg' => "<p> ERRO: Nenhuma Ficha encontrada </p>"];
    }

    echo json_encode($retorna);
?>