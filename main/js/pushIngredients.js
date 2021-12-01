// INSERIMENTO NEL DOM DEGLI INGREDIENTI

const ingrTitle = document.createElement("div");
ingrTitle.setAttribute("class", "ingrTitle");
ingrTitle.innerHTML = "Ingredienti per @ persone";
document.getElementsByClassName("containerIngredients")[0].appendChild(ingrTitle);

const ulIngr = document.createElement("ul");
ulIngr.setAttribute("class", "flexContainer ingrCont");
document.getElementsByClassName("containerIngredients")[0].appendChild(ulIngr);
// let li = ""
for (let ind = 0; ind < ingredienti.length; ind++) {
    let li = document.createElement("li");
    li.setAttribute("class", "ingr");
    document.getElementsByClassName("flexContainer ingrCont")[0].appendChild(li);

    let spanPunto = document.createElement("span");
    spanPunto.setAttribute("class", "puntoElenco");
    spanPunto.innerHTML = "&#8226;"
    document.getElementsByClassName("ingr")[ind].appendChild(spanPunto);

    let spanIngr = document.createElement("span");
    spanIngr.setAttribute("class", "spanIngr");
    spanIngr.innerHTML = " " + ingredienti[ind].nomeIngr;
    document.getElementsByClassName("ingr")[ind].appendChild(spanIngr);

    let spanQta = document.createElement("span");
    spanQta.setAttribute("class", "spanQta");
    spanQta.innerHTML = " " + ingredienti[ind].qta;
    document.getElementsByClassName("ingr")[ind].appendChild(spanQta);

    let spanMis = document.createElement("span");
    spanMis.setAttribute("class", "spanMis");
    spanMis.innerHTML = " " + ingredienti[ind].unitqta;
    document.getElementsByClassName("ingr")[ind].appendChild(spanMis);

    // console.log(ingredienti[ind].nomeIngr);
}