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

    <div id="unicorno"></div>

    <h1 class="new">Dettagli ricetta</h1>

    <!-- TIPO DEVE DIVENTARE UNA CHECKBOX -->
    <!-- DA INDICARE A CHI MANDARE I DATI -->
    <form class="" action="insert.php" method="post">
        <div class="containerDettagli">
            <input type="text" name="nome" placeholder="Nome della ricetta" required>
            <input type="text" name="difficolta" placeholder="Difficoltà:           MIN => 1         MAX => 5" required>
            <input type="text" name="qtaPersone" placeholder="Ricetta per quante persone?" required>
            <input type="textarea" name="descrizione" placeholder="Descrizione della ricetta            **Opzionale">
            <input type="text" name="daservire" placeholder="In che modo va servita (caldo/freddo/indifferente)" required>
            <input type="text" name="dataCreazione" style="display: none;">
            <div id="newType"></div>
        </div>

        <h1 class="new">Ingredienti ricetta</h1>
        <div class="containerSec">
            <div id="newIn"></div>
            <div id="addIngredient"></div>
            <div id="deleteIngredient"></div>
        </div>
        <h1 class="new">Passaggi ricetta</h1>

        <div class="containerSec">
            <div id="newPass"></div>
            <div id="addPassage"></div>
            <div id="deletePassage"></div>
        </div>
        <input id="crea" type="submit" value="Crea">

    </form>

    <div id="prova"></div>
    <!-- <button id="btn">Nuovo Ingrediente</button> -->

    <script src="./js/pushTipoRicetta.js"></script>
    <script src="./js/generaIngredienteDOM.js"></script>
    <script src="./js/generaPassaggioDOM.js"></script>

    <script>
        // PULSANTE SUBMIT RIMANDATO;
        document.getElementById("prova").addEventListener("click", ()=>{
            let data = new Date().toLocaleDateString();
            let dataCreazione = document.getElementsByName("dataCreazione")[0];
            dataCreazione.value = data;
            document.getElementById("crea").click();

        })
    </script>
    

</body>

</html>