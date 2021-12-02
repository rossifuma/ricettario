<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addRicette.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Aggiungi ricetta</title>
</head>

<body>

    <nav class="navbar">
        <h1 class="navdescription">Benvenuta Veronica</h1>
        <a class="about" href="./cerca.html">Torna indietro</a>
    </nav>



    <h1 class="new">Dettagli ricetta!!</h1>

    <!-- TIPO DEVE DIVENTARE UNA CHECKBOX -->
    <!-- DA INDICARE A CHI MANDARE I DATI -->
    <form class="" action="insert.php" method="post">
        <div class="containerDettagli">
            <input type="text" name="nome" placeholder="Nome della ricetta">
            <input type="text" name="difficolta" placeholder="Difficoltà:           MIN => 1         MAX => 5">
            <input type="text" name="qtaPersone" placeholder="Ricetta per quante persone?">
            <input type="textarea" name="descrizione" placeholder="Descrizione della ricetta            **Opzionale">
            <input type="text" name="daservire" placeholder="in che modo va servita (caldo o freddo)">
            <div id="newType"></div>
        </div>

        <h1 class="new">Ingredienti ricetta</h1>
        <div class="containerSec">
            
            <div id="newIn"></div>
            <div id="addIngredient"></div>
            <div id="deleteIngredient"></div>
            
            <div id="newPass"></div>
            
            <input type="submit" value="Crea">

        </div>
    </form>
    <!-- <button id="btn">Nuovo Ingrediente</button> -->
    <button id="btnPass">Nuovo Passaggio</button>





    <script src="./js/pushTipoRicetta.js"></script>
    <script>
         
        // GENERAZIONE PRIMO INGREDIENTE
        let cont = 0;
        generaIngrediente(cont + 1);
        cont++;
        document.getElementById("addIngredient").addEventListener("click", () => {
            let dad = document.getElementById("newIn");
            cont += 1;
            generaIngrediente(cont);
        });


        let contPass = 0;
        document.getElementById("btnPass").addEventListener("click", () => {
            let dad = document.getElementById("newPass");
            contPass += 1;
            generaPassaggio(contPass);
        });

        function generaPassaggio(contPass) {

            let nomePass = document.createElement("input");
            nomePass.setAttribute("type", "text");
            nomePass.setAttribute("name", `procedimento[passaggio${contPass}]`);
            nomePass.setAttribute("placeholder", `Passaggio numero ${contPass}`);
            document.getElementById("newPass").appendChild(nomePass);
        }


        function generaIngrediente(cont) {

            let nomeIngr = document.createElement("input");
            nomeIngr.setAttribute("type", "text");
            nomeIngr.setAttribute("class","nomeIngr");
            nomeIngr.setAttribute("name", `Ingrediente${cont}[nomeIngr]`);
            nomeIngr.setAttribute("placeholder", `Ingriente numero ${cont}`);
            document.getElementById("newIn").appendChild(nomeIngr);


            
        }
    </script>




</body>

</html>