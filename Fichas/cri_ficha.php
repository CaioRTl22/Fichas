<?php
    session_start();
    $email = $_SESSION['email'];
    //Ve se ele foi caregado com um submit
    if(isset($_POST['submit'])){

            //Chama o metodo de configuração do banco
        include_once('config.php');
            //Criação de variaveis dom os dados recebidos
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $nivel = $_POST['nivel'];
        $afinidade = $_POST['afinidade'];
        $classe = $_POST['classe'];
        $trilha = $_POST['trilha'];
        $vida = $_POST['vida'];
        $sanidade = $_POST['sanidade'];
        $pp = $_POST['pp'];

        $forca = $_POST['forca'];
        $destreza = $_POST['destreza'];
        $constituicao = $_POST['constituicao'];
        $sabedoria = $_POST['sabedoria'];
        $inteligencia = $_POST['inteligencia'];
        $carisma = $_POST['carisma'];
        $poder = $_POST['poder'];

        $armPassiva = $_POST['armadura-passiva'];
        $bloqueio = $_POST['bloqueio'];
        $esquiva = $_POST['esquiva'];
        $redFisica = $_POST['redFisica'];
        $redParanormal = $_POST['redParanormal'];
        $redMental = $_POST['redMental'];
        $movimento = $_POST['movimento'];

        $acrobacia = $_POST['acrobacia'];
        $atletismo = $_POST['atletismo'];
        $atualidades = $_POST['atualidades'];
        $ciencias = $_POST['ciencias'];
        $charme = $_POST['charme'];
        $diplomacia = $_POST['diplomacia'];
        $enganacao = $_POST['enganacao'];
        $fortitude = $_POST['fortitude'];
        $furtividade = $_POST['furtividade'];
        $iniciativa = $_POST['iniciativa'];
        $investigacao = $_POST['investigacao'];
        $luta = $_POST['luta'];
        $ocultismo = $_POST['ocultismo'];
        $percepcao = $_POST['percepcao'];
        $pilotagem = $_POST['pilotagem'];
        $pontaria = $_POST['pontaria'];
        $psicologia = $_POST['psicologia'];
        $reflexos = $_POST['reflexos'];
        $tecnologia = $_POST['tecnologia'];
        $vontade = $_POST['vontade'];
        
        $sql_insert =  "INSERT INTO tb_ficha(
            nome_ficha ,idade_ficha ,nivel_ficha,
            afinidade_ficha, classe_ficha, trilha_ficha,
            vida_ficha, sanidade_ficha, pp_ficha) 
        VALUES (
            '$nome','$idade','$nivel',
            '$afinidade','$classe','$trilha',
            '$vida','$sanidade','$pp')";

        $result = mysqli_query($conexao, $sql_insert);

        
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG Formulário</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #212529;
            color: #fff;
        }

    </style>
</head>
<body>
    <p>Volte para a sua conta </p> <a href="logado.php">aqui!</a>
    <form action="" method="post">
    <div class="container">
        <div class="basic-stats">
            <h2>Estatísticas Básicas</h2>
            <div class="basic-stats-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="basic-stats-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade">
            </div>
            <div class="basic-stats-group">
                <label for="nivel">Nível:</label>
                <input type="number" id="nivel" name="nivel">
            </div>
            <div class="basic-stats-group">
                <label for="afinidade">Afinidade:</label>
                <input type="text" id="afinidade" name="afinidade">
            </div>
            <div class="basic-stats-group">
                <label for="classe">Classe:</label>
                <input type="text" id="classe" name="classe">
            </div>
            <div class="basic-stats-group">
                <label for="trilha">Trilha:</label>
                <input type="text" id="trilha" name="trilha">
            </div>
            <div class="basic-stats-group">
                <label for="vida">Vida:</label>
                <input type="number" id="vida" name="vida">
            </div>
            <div class="basic-stats-group">
                <label for="sanidade">Sanidade:</label>
                <input type="number" id="sanidade" name="sanidade">
            </div>
            <div class="basic-stats-group">
                <label for="pp">Pontos de Poder (PP):</label>
                <input type="number" id="pp" name="pp">
            </div>
        </div>

        <div class="attributes">
            <h2>Atributos</h2>
            <div class="attributes-group">
                <label for="forca">Força:</label>
                <input type="number" id="forca" name="forca">
            </div>
            <div class="attributes-group">
                <label for="destreza">Destreza:</label>
                <input type="number" id="destreza" name="destreza">
            </div>
            <div class="attributes-group">
                <label for="constituicao">Constituição:</label>
                <input type="number" id="constituicao" name="constituicao">
            </div>
            <div class="attributes-group">
                <label for="sabedoria">Sabedoria:</label>
                <input type="number" id="sabedoria" name="sabedoria">
            </div>
            <div class="attributes-group">
                <label for="inteligencia">Inteligência:</label>
                <input type="number" id="inteligencia" name="inteligencia">
            </div>
            <div class="attributes-group">
                <label for="carisma">Carisma:</label>
                <input type="number" id="carisma" name="carisma">
            </div>
            <div class="attributes-group">
                <label for="poder">Poder:</label>
                <input type="number" id="poder" name="poder">
            </div>
        </div>

        <div class="combat-stats">
            <h2>Estatísticas de Combate</h2>
            <div class="combat-group">
                <label for="armadura-passiva">Armadura Passiva:</label>
                <input type="number" id="armadura-passiva" name="armadura-passiva">
            </div>
            <div class="combat-group">
                <label for="bloqueio">Bloqueio:</label>
                <input type="number" id="bloqueio" name="bloqueio">
            </div>
            <div class="combat-group">
                <label for="esquiva">Esquiva:</label>
                <input type="number" id="esquiva" name="esquiva">
            </div>
            <div class="combat-group">
                <label for="reducao-fisica">Redução Física:</label>
                <input type="number" id="reducao-fisica" name="reducao-fisica">
            </div>
            <div class="combat-group">
                <label for="reducao-paranormal">Redução Paranormal:</label>
                <input type="number" id="reducao-paranormal" name="reducao-paranormal">
            </div>
            <div class="combat-group">
                <label for="reducao-mental">Redução Mental:</label>
                <input type="number" id="reducao-mental" name="reducao-mental">
            </div>
            <div class="combat-group">
                <label for="movimento">Movimento:</label>
                <input type="number" id="movimento" name="movimento">
            </div>
        </div>

        <div class="skills">
            <h2>Perícias</h2>
            <div class="skill-checkboxes">
                <label><input type="checkbox" name="acrobacia" value = '1'>Acrobacia</label>
                <label><input type="checkbox" name="atletismo" value = '1'>Atletismo</label>
                <label><input type="checkbox" name="atualizades" value = '1'>Atualizações</label>
                <label><input type="checkbox" name="ciencias" value = '1'>Ciências</label>
                <label><input type="checkbox" name="charme" value = '1'>Charme</label>
                <label><input type="checkbox" name="diplomacia" value = '1'>Diplomacia</label>
                <label><input type="checkbox" name="enganação" value = '1'>Enganação</label>
                <label><input type="checkbox" name="fortitude" value = '1'>Fortitude</label>
                <label><input type="checkbox" name="furtividade" value = '1'>Furtividade</label>
                <label><input type="checkbox" name="iniciativa" value = '1'>Iniciativa</label>
                <label><input type="checkbox" name="investigação" value = '1'>Investigação</label>
                <label><input type="checkbox" name="luta" value = '1'>Luta</label>
                <label><input type="checkbox" name="ocultismo" value = '1'>Ocultismo</label>
                <label><input type="checkbox" name="percepção" value = '1'>Percepção</label>
                <label><input type="checkbox" name="pilotagem" value = '1'>Pilotagem</label>
                <label><input type="checkbox" name="pontaria" value = '1'>Pontaria</label>
                <label><input type="checkbox" name="psicologia" value = '1'>Psicologia</label>
                <label><input type="checkbox" name="reflexos" value = '1'>Reflexos</label>
                <label><input type="checkbox" name="tecnologia" value = '1'>Tecnologia</label>
                <label><input type="checkbox" name="vontade" value = '1'>Vontade</label>
            </div>
            <div class="skill-bonus">
                <label for="bonus-pericia">Bônus de Perícia:</label>
                <input type="number" id="bonus-pericia" name="bonus-pericia">
            </div>
        </div>
    </div>
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>




        