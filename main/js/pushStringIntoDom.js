// Inserimento dei dati presi da DB nel DOM


let img = document.createElement("img");
// img.setAttribute("src", "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2017/10/1506930784_e0b6a6d14738441ee100b310b9ca8140b736f07c-1506790451.jpg");
img.setAttribute("src", "../img/caffelatte.jpg");
document.getElementsByClassName("product")[0].appendChild(img);

let title = document.createElement("div");
title.setAttribute("class", "title");
title.innerHTML = `${data[0].nome}`;
document.getElementsByClassName("product")[0].appendChild(title);

let difficulty = document.createElement("div");
let string = "&#9733;".repeat(data[0].difficolta);
let string2 = "";
if (data[0].difficolta < "3") {
    string2 = "facile";
} else if (data[0].difficolta === "3") {
    string2 = "medio";
} else if (data[0].difficolta > "3") {
    string2 = "difficile";
}
difficulty.setAttribute("class", "difficulty");
difficulty.innerHTML = `Difficoltà : ${string2}   ${string}`;
document.getElementsByClassName("product")[0].appendChild(difficulty);

let daServire = document.createElement("div");
daServire.setAttribute("class", "daServire");
daServire.innerHTML = `Da servire: ${data[0].daservire}`;
document.getElementsByClassName("product")[0].appendChild(daServire);

let tipo = document.createElement("div");
tipo.setAttribute("class", "tipo");
let stringTipo = "";
if (typeof (tipi) === "string") {
    stringTipo = tipi;
} else {
    for (let ind = 0; ind < tipi.length; ind++) {
        stringTipo += tipi[ind]
        if (ind < tipi.length - 1) {
            stringTipo += ", "
        }
    }
}
tipo.innerHTML = `Ideale per : ${stringTipo}`;
document.getElementsByClassName("product")[0].appendChild(tipo);