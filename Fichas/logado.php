<?php

        include_once('config.php');

    session_start();
    $email = $_SESSION['email'];


   $sql = "SELECT * FROM tb_usuario WHERE usuario_email = '$email' LIMIT 1";
   //Resultado da busca
   $resultado = $conexao->query($sql) or die($conexao->error);

   //Associando uma variavel usuario ao resultado
   $usuario = $resultado->fetch_assoc();


   $sql_ficha = "SELECT nome_ficha FROM tb_ficha WHERE tb_usuario_usuario_email = '$email' " ;

   $resultado_fichas = $conexao->query($sql_ficha) or die($conexao->error);

   

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Olá! <?php echo $usuario['usuario_nome']; ?></p> 

    <p>Aqui abaixo estao suas fichas:</p>

    <?php
        while($ficha = $resultado_fichas->fetch_assoc()){
            echo $ficha['nome_ficha']. "<br>"; 
        }
    ?>


</body>
</html>