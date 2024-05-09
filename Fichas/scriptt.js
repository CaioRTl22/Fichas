//Visualizar Ficha

async function visFicha(id){
    console.log(id)
    const dados = await fetch('visualizar.php?id=' + id);
    console.log('visualizar.php?id=' + id);
    const resposta = await dados.json();
    console.log(resposta);

    if(!resposta['status']){
        document.getElementById("msgErro").innerHTML = resposta['msg'];
    }
    else{
        document.getElementById("msgErro").innerHTML = '';

        const visModal = new bootstrap.Modal(document.getElementById('visUsuarioModal'));
        visModal.show();

        document.getElementById('nomeFicha').innerHTML = resposta['dados'].nome_ficha;
        document.getElementById('idadeFicha').innerHTML = resposta['dados'].idade_ficha;
        document.getElementById('nivelFicha').innerHTML = resposta['dados'].nivel_ficha;
        document.getElementById('afinidadeFicha').innerHTML = resposta['dados'].afinidade_ficha;
        document.getElementById('classeFicha').innerHTML = resposta['dados'].classe_ficha;
        document.getElementById('trilhaFicha').innerHTML = resposta['dados'].trilha_ficha;


        document.getElementById('vidaFicha').innerHTML = resposta['dados'].vida_ficha;
        document.getElementById('sanidadeFicha').innerHTML = resposta['dados'].sanidade_ficha;
        document.getElementById('ppFicha').innerHTML = resposta['dados'].pp_ficha;
        document.getElementById('nivelFicha').innerHTML = resposta['dados'].nivel_ficha;
        document.getElementById('afinidadeFicha').innerHTML = resposta['dados'].afinidade_ficha;
        document.getElementById('classeFicha').innerHTML = resposta['dados'].classe_ficha;
    }
}