<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/document.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>


    <div id="container">
        <div class="product clearfix"></div>
    </div>
    <hr>
    <div class ="containerIngredients"></div>







    <!-- PAGINA INGRANDITA CON TUTTE LE INFORMAZIONI PER LA RICETTA RICHIESTA -->

    <?php

    require("./config.php");

    $idOggetto = $_GET["val"];

    if ($ricerca === "") {
        $cursor = $collection->find();
        $array = array();
        foreach ($cursor as $restaurant) {
            array_push($array, $restaurant);
        };
    } else {
        $cursor = $collection->find([
            '_id' => new MongoDB\BSON\ObjectID($idOggetto)
        ]);
        $array = array();
        foreach ($cursor as $restaurant) {
            array_push($array, $restaurant);
        };
    }
    ?>
    <script>
        let data = <?php echo json_encode($array) ?>;
        console.log(data[0]);
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
                if (typeof(data[0][key]) === "string") {
                    tipi = data[0][key];
                } else {
                    tipi = [];
                    for (let x = 0; x < data[0][key].length; x++) {
                        tipi.push(data[0][key][x]);
                    }
                }
            }
        }
        // console.log(`ci sono ${contIngrediente-1} ingredienti`);
        // console.log(`ci sono ${contPassaggi-1} Passaggi`);
        console.log(ingredienti);
        // console.log(passaggi);

        let img = document.createElement("img");
        img.setAttribute("src", "https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2017/10/1506930784_e0b6a6d14738441ee100b310b9ca8140b736f07c-1506790451.jpg");
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
        if (typeof(tipi) === "string") {
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
    </script>


</body>

</html>