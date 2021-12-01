// INSERIMENTO DEI PROCEDIMENTI PER LA PREPARAZIONE DEL PIATTO


for (let index = 0; index < passaggi.length; index++) {
    const spanProc = document.createElement("span");
    spanProc.setAttribute("class", "spanProc");
    document.getElementsByClassName("flexContainer proc")[0].appendChild(spanProc);
    let spanPunto = document.createElement("span");
    spanPunto.setAttribute("class", "puntoElenco");
    document.getElementsByClassName("spanProc")[index].appendChild(spanPunto);
    spanProc.innerHTML += passaggi[index];

}