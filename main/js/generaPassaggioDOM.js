// FUNZIONE DI AGGIUNTA PASSAGGI DURANTE LA CREAZIONE DELLA RICETTA

let contPass = 0;
generaPassaggio(contPass + 1);
contPass += 1;
document.getElementById("addPassage").addEventListener("click", () => {
    contPass += 1;
    generaPassaggio(contPass);

});

document.getElementById("deletePassage").addEventListener("click", () => {
    let esito = eliminaPassaggio(contPass - 1);
    if (esito === true) {
        contPass -= 1;
    }

})

function generaPassaggio(contPass) {

    let nomePass = document.createElement("input");
    nomePass.setAttribute("type", "text");
    nomePass.setAttribute("class", "nomePass");
    nomePass.setAttribute("name", `procedimento[passaggio${contPass}]`);
    nomePass.setAttribute("placeholder", `Passaggio numero ${contPass}`);
    document.getElementById("newPass").appendChild(nomePass);
}

function eliminaPassaggio(contPass) {
    if (contPass > 0) {
        let nomePass = document.getElementsByClassName("nomePass")[contPass];
        nomePass.remove();
        return true;
    } else {
        alert("impossibile eliminare il primo passaggio: la ricetta deve contenere almeno un passaggio");
        return false;
    }

}