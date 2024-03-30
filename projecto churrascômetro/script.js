// carne 400g por pessoa + 5h = 650g por pessoa
// cerveja 1,5l por pessoa + 5h = 2,5l
//Refrigerante/ Sumo 1000ml por pessoa + 5h 1500ml
//Água 500ml por pessoa + 5h 1000ml
// crianças valem por 0,5

let inputAdultos = document.getElementById("adultos");
let inputCriancas = document.getElementById("criancas");
let inputDuracao = document.getElementById("duracao");

let resultado = document.getElementById("resultado");

function calcular() {
    console.log("Calculando...");

    let adultos = inputAdultos.value;
    let criancas = inputCriancas.value;
    let duracao = inputDuracao.value;


    let qdtTotalCarne = carnePP(duracao) * adultos + (carnePP(duracao) / 2 * criancas);
    let qdtTotalCerveja = cervejaPP(duracao) * adultos;
    let qdtTotalBebidas = bebidasPP(duracao) * adultos + (bebidasPP(duracao) / 2 * criancas);
    let qdtTotalAgua = aguaPP(duracao) * adultos + (aguaPP(duracao) / 2 * criancas);


    resultado.innerHTML = `<p> Vais precisar de: <br><br>${qdtTotalCarne / 1000} Kg de Carne</p>`
    resultado.innerHTML += `<p>${Math.ceil(qdtTotalCerveja / 500)} Latas de Cerveja(500 ml)</p>`
    resultado.innerHTML += `<p>${Math.ceil(qdtTotalBebidas / 500)}  Garrafas de Refrigerantes/Sumos(500 ml)</p>`
    resultado.innerHTML += `<p>${Math.ceil(qdtTotalAgua / 500)}  Garrafas de Água (500 ml)</p>`


}

function carnePP(duracao) {
    if (duracao >= 5) {
        return 650;
    } else {
        return 400;
    }
}


function cervejaPP(duracao) {
    if (duracao >= 5) {
        return 2500;
    } else {
        return 1500;
    }
}
function bebidasPP(duracao) {
    if (duracao >= 5) {
        return 1500;
    } else {
        return 1000;
    }
}
function aguaPP(duracao) {
    if (duracao >= 5) {
        return 1000;
    } else {
        return 500;
    }
}

