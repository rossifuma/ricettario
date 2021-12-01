// OTTIENE I DATI DAL DATABASE 


let ingredienti = [];
let passaggi = [];
contIngrediente = 1;
contPassaggi = 1;
let tipi = [];
for (key in data[0]) {
    if (key === `Ingrediente${contIngrediente}`) {
        contIngrediente++;
        ingredienti.push(data[0][key]);
    }
    if (key === 'procedimento') {
        for (chiave in data[0].procedimento) {
            if (chiave === `passaggio${contPassaggi}`) {
                contPassaggi++;
                passaggi.push(data[0][key][chiave]);
            }
        }
    }
    if (key === 'tipo') {
        if (typeof (data[0][key]) === "string") {
            tipi = data[0][key];
        } else {
            tipi = [];
            for (let x = 0; x < data[0][key].length; x++) {
                tipi.push(data[0][key][x]);
            }
        }
    }
}