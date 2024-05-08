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

        document.getElementById('idFicha').innerHTML = resposta['dados'].id_ficha;
    }
}