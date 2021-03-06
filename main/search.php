<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <nav class="navbar">
        <h1 class="navdescription">Benvenuta Veronica</h1>
        <a class="about" href="./cerca.html">Torna indietro</a>

    </nav>

    <hr>
    <div id="container"></div>




    <?php
    require("./config.php");

    //cerca ricetta secondo il filtro tipo (colazione, pranzo, cena)
    $ricerca = $_GET["type"];
    // $ricerca = "cena";

    if ($ricerca === "") {
        $cursor = $collection->find();
        $array = array();
        foreach ($cursor as $restaurant) {
            array_push($array, $restaurant);
        };
    } else {
        $cursor = $collection->find([
            'tipo' => $ricerca
        ]);
        $array = array();
        foreach ($cursor as $restaurant) {
            array_push($array, $restaurant);
        };
    }

    ?>

    <script>
        let data = <?php echo json_encode($array) ?>;

        for (let i = 0; i < data.length; i++) {
            creaNodo(data[i], i);
            // console.log(data[i].nome);
        }

        function creaNodo(data, i) {
            let product = document.createElement("div");
            product.setAttribute("class", "product");
            product.setAttribute("val", `${data._id.$oid}`);
            document.getElementById("container").appendChild(product);
            let description = document.createElement("div");
            description.innerHTML = `${data.nome}`;
            description.setAttribute("class", "description");
            document.querySelector(`[val='${data._id.$oid}']`).appendChild(description);
            let img = document.createElement("img");
            img.setAttribute("src", "../img/sfondoPiccolo.jpg");
            document.querySelector(`[val='${data._id.$oid}']`).appendChild(img);
            // console.log(data._id.$oid); ID DEL PRODOTTO;
        }
    </script>

    <script>
        let prova = document.getElementsByClassName("product");
        for (let index = 0; index < prova.length; index++) {
            prova[index].addEventListener("click", () => {
                location.href = `./document.php?val=${prova[index].getAttribute("val")}`;
                // prova[index].getAttribute("val")} VALORE ID PRODOTTO CLICCATO;
            })
        }
    </script>



</body>

</html>