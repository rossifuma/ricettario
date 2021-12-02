// FUNZIONE DI AGGIUNTA INGREDIENTI DURANTE LA CREAZIONE DELLA RICETTA

let cont = 0;
generaIngrediente(cont + 1);
cont++;
document.getElementById("addIngredient").addEventListener("click", () => {
    cont += 1;
    generaIngrediente(cont);
});


document.getElementById("deleteIngredient").addEventListener("click", () => {
    let esito = eliminaIngrediente(cont - 1);
    if (esito === true) {
        cont -= 1;
    }
});


// FUNZIONI

function generaIngrediente(cont) {

    let nomeIngr = document.createElement("input");
    nomeIngr.setAttribute("type", "text");
    nomeIngr.setAttribute("class", "nomeIngr");
    nomeIngr.setAttribute("name", `Ingrediente${cont}[nomeIngr]`);
    nomeIngr.setAttribute("placeholder", `Ingriente numero ${cont}`);
    document.getElementById("newIn").appendChild(nomeIngr);
}

function eliminaIngrediente(cont) {
    if (cont > 0) {
        let nomeIngr = document.getElementsByClassName("nomeIngr")[cont];
        nomeIngr.remove();
        return true;
    } else {
        alert("impossibile eliminare il primo ingrediente: la ricetta deve contenere almeno un elemento");
        return false;
    }

}