<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi ricetta</title>
</head>

<body>

    <a class="navdescription" href="./cerca.html">Torna indietro</a>
    <h1>Aggiungi ricetta!!</h1>


    <!-- DA INDICARE A CHI MANDARE I DATI -->
    <form class="" action="insert.php" method="post">
        <input type="text" name="nome" placeholder="Inserisci il nome della ricetta">
        <input type="text" name="difficolta" placeholder="Difficoltà da 1 a 10">
        <input type="textarea" name="descrizione" placeholder="Descrizione della ricetta">
        <input type="text" name="daservire" placeholder="in che modo va servita (caldo o freddo)">
        <h1>INGREDIENTI</h1>

        <input type="submit" name="" value="INVIA I DATI">
        <div id="newPass"></div>
        <div id="newIn"></div>
    </form>
    <button id="btn">Nuovo Ingrediente</button>
    <button id="btnPass">Nuovo Passaggio</button>




    <script>
        let cont = 0;
        document.getElementById("btn").addEventListener("click", () => {
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
            nomeIngr.setAttribute("name", `Ingrediente${cont}[nomeIngr]`);
            nomeIngr.setAttribute("placeholder", `Ingriente numero ${cont}`);
            document.getElementById("newIn").appendChild(nomeIngr);


            let qta = document.createElement("input");
            qta.setAttribute("type", "text");
            qta.setAttribute("name", `Ingrediente${cont}[qta]`);
            qta.setAttribute("placeholder", `Qta materiale ${cont}`);
            document.getElementById("newIn").appendChild(qta);

            let unitqta = document.createElement("input");
            unitqta.setAttribute("type", "text");
            unitqta.setAttribute("name", `Ingrediente${cont}[unitqta]`);
            unitqta.setAttribute("placeholder", `unita di misura della quantita${cont}`);
            document.getElementById("newIn").appendChild(unitqta);
        }
    </script>




</body>

</html>