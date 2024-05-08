//Visualizar Ficha

async function visFicha(id){
    //console.log(id)
    const dados = await fetch('visualizar.php?id= ' + id);
    const resposta = await dados.json();
    console.log(resposta);
}