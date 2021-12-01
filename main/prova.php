<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar">
        <h1 class="navdescription">Benvenuta Veronica</h1>
        <a class="about" href="./cerca.html">Torna indietro</a>

    </nav>

    <hr>
    <div id="container">

    </div>




    <?php
    require("./config.php");

    //cerca ricetta secondo il filtro tipo (colazione, pranzo, cena)
    // $ricerca = $_GET["type"];
    // $ricerca = "ObjectId(61a4ba1d3465c080866a4e04)";

    if ($ricerca === "") {
        $cursor = $collection->find();
        $array = array();
        foreach ($cursor as $restaurant) {
            array_push($array, $restaurant);
        };
    } else {
        $cursor = $collection->find([
            '_id' => new MongoDB\BSON\ObjectID("")
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
            console.log(data[i].nome);
        }

        function creaNodo(data, i) {
            let product = document.createElement("div");
            product.setAttribute("class", "product");
            product.setAttribute("val", `${i}`);
            document.getElementById("container").appendChild(product);
            let description = document.createElement("div");
            description.innerHTML = `${data.nome}`;
            description.setAttribute("class", "description");
            document.querySelector(`[val='${i}']`).appendChild(description);
            let img = document.createElement("img");
            img.setAttribute("src", "../img/sfondoPiccolo.jpg");
            document.querySelector(`[val='${i}']`).appendChild(img);
            console.log(data._id.$oid);
        }
    </script>




</body>

</html>