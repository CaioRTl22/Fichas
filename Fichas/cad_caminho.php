<?php
    session_start();
    //Ve se ele foi caregado com um submit
    if(isset($_POST['submit'])){
/*
    Se quiser ver os prints
    {
        print_r();
        print_r($_POST['email']);
        print_r($_POST['genero']);
        print_r($_POST['senha']);
    }
    
*/
            //Chama o metodo de configuração do banco
        include_once('config.php');
            //Criação de variaveis dom os dados recebidos
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
            //Criptação da senha
        $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
            //Execusão do banco de dados de inserção
        $result = mysqli_query($conexao, "INSERT INTO tb_usuario(usuario_nome ,usuario_email ,usuario_senha) VALUES ('$nome','$email','$senha_cripto')");

        $_SESSION['email'] = $email;

        header('Location: logado.html');
        
    }

?>