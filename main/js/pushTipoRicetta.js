// Inserimento nel DOM dei tipi di ricetta (COLAZIONE, PRANZO, MERENDA, APERITIVO, CENA, DOLCE)

let divType = document.createElement("div");
divType.setAttribute("class", "divType");
document.getElementById("newType").appendChild(divType);

let nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "colazione");
nomeType.setAttribute("value", "colazione");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
let labelType = document.createElement("label");
labelType.setAttribute("for", "colazione");
labelType.innerHTML = "colazione";
document.getElementsByClassName("divType")[0].appendChild(labelType);

nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "pranzo");
nomeType.setAttribute("value", "pranzo");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
labelType = document.createElement("label");
labelType.setAttribute("for", "pranzo");
labelType.innerHTML = "pranzo";
document.getElementsByClassName("divType")[0].appendChild(labelType);

nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "merenda");
nomeType.setAttribute("value", "merenda");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
labelType = document.createElement("label");
labelType.setAttribute("for", "merenda");
labelType.innerHTML = "merenda";
document.getElementsByClassName("divType")[0].appendChild(labelType);

nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "aperitivo");
nomeType.setAttribute("value", "aperitivo");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
labelType = document.createElement("label");
labelType.setAttribute("for", "aperitivo");
labelType.innerHTML = "aperitivo";
document.getElementsByClassName("divType")[0].appendChild(labelType);

nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "cena");
nomeType.setAttribute("value", "cena");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
labelType = document.createElement("label");
labelType.setAttribute("for", "cena");
labelType.innerHTML = "cena";
document.getElementsByClassName("divType")[0].appendChild(labelType);

nomeType = document.createElement("input");
nomeType.setAttribute("type", "checkbox");
nomeType.setAttribute("name", `tipo[]`);
nomeType.setAttribute("id", "dolce");
nomeType.setAttribute("value", "dolce");
document.getElementsByClassName("divType")[0].appendChild(nomeType);
labelType = document.createElement("label");
labelType.setAttribute("for", "dolce");
labelType.innerHTML = "dolce";
document.getElementsByClassName("divType")[0].appendChild(labelType);

