<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastre-se</h1>
        <br>
    <form action="cad_caminho.php" method="post">
        <label for="nome">Nome</label> <br>
            <input type="text" name="nome" id="nome"> <br>
        <label for="email">Email</label> <br>
            <input type="email" name="email" id="email"> <br>
        <label for="senha">Senha</label> <br>
            <input type="password" name="senha" id="senha"> <br>
        <input type="submit" name= "submit" id="submit" value="Cadastrar">
    </form>

    <p>Se já tiver cadastro clique <a href="index.html">aqui!</a></p>

</body>
</html>