<?php
    //Incliu o banco
        include_once('config.php');
    //Verifica se o usuario ta logado
    verificaUsuario();
            
    //começa uma sessao
    session_start();
    $email = $_SESSION['email'];

    //query para pegar o usuario
   $sql = "SELECT * FROM tb_usuario WHERE usuario_email = '$email' LIMIT 1";
   //Resultado da busca
   $resultado = $conexao->query($sql) or die($conexao->error);

   //Associando uma variavel usuario ao resultado
   $usuario = $resultado->fetch_assoc();

    //query das fichas
   $sql_ficha = "SELECT * FROM tb_ficha WHERE tb_usuario_usuario_email = '$email' " ;
    //todas as fichas daquele usuario
   $resultado_fichas = $conexao->query($sql_ficha) or die($conexao->error);

   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./script.js"></script>
</head>
<body>
    <h1>Olá! <?php echo $usuario['usuario_nome']; ?></h1> 

    <p>Aqui abaixo estao suas fichas:</p>

    <span id="msgErro"></span> <br>

    <?php
        while($ficha = $resultado_fichas->fetch_assoc()){
            $id = $ficha['id_ficha'];
            echo $ficha['nome_ficha']."<a href='#' onclick='visFicha($id)'> Visualizar </a> "."<br>" ;
          
        }
    ?>


<!-- Inicio Modal visualizar usuario -->
<div class="modal fade" id="visUsuarioModal" tabindex="-1" aria-labelledby="visUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visUsuarioModalLabel">Visualizar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="msgAlertaErroVis"></span>
                    <dl class="row">
                        <dt class="col-sm-3">ID</dt>
                        <dd class="col-sm-9"><span id="idFicha"></span></dd>
                        
                        <dt class="col-sm-3">Nome</dt>
                        <dd class="col-sm-9"><span id="nomeUsuario"></span></dd>
                        
                        <dt class="col-sm-3">E-mail</dt>
                        <dd class="col-sm-9"><span id="emailUsuario"></span></dd>
                        
                        <dt class="col-sm-3">Logradouro</dt>
                        <dd class="col-sm-9"><span id="logradouroUsuario"></span></dd>
                        
                        <dt class="col-sm-3">Número</dt>
                        <dd class="col-sm-9"><span id="numeroUsuario"></span></dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal visualizar usuario -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>