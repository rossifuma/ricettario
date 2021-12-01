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

    <!-- INIZIO NAVBAR -->
    <nav class="navbar">
        <h1 class="navdescription">Benvenuta Veronica</h1>
        <a class="about" href="./cerca.html">Torna indietro</a>
    </nav>
    <!-- FINE NAVBAR -->

    <!-- PARTE ALTA CON FOTO, TITOLO E DIFFICOLTÀ -->
    <div id="container">
        <div class="product clearfix"></div>
    </div>
    <!-- FINE DELLA PARTE ALTA -->
    <hr>


    <div class="main">


        <div class="containerIngredients">
            <!-- <div class="ingrTitle">Ingredienti per <span>5</span> persone:</div> -->
            <!-- <ul class="flexContainer ingrCont"> -->
            <!-- <li class="ingr"><span class="puntoElenco">&#8226;</span><span>Ingrediente</span><span> Qta</span><span> Misura</span></li> -->
            </ul>
        </div>


        <div class="containerProcedimento">
            <div class="procTitle">Procedimento:</div>
            <ul class="flexContainer proc">
                <!-- <span><span class="puntoElenco">&#8226;</span> -->
                <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit officiis earum eveniet illo, placeat ad deleniti quibusdam itaque recusandae eos ipsum suscipit pariatur perferendis hic!</span> -->

            </ul>
        </div>

    </div>








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
    </script>
    <script src="./js/dataRecord.js"></script>
    <script src="./js/pushStringIntoDom.js"></script>
    <script src="./js/pushIngredients.js"></script>
    <script src="./js/pushProcedure.js"></script>
    <script>
        // console.log(`ci sono ${contIngrediente-1} ingredienti`);
        // console.log(`ci sono ${contPassaggi-1} Passaggi`);
        // console.log(passaggi);
        // console.log(data[0]);
        // let title = document.createElement("div");
        // title.setAttribute("class", "title");
        // title.innerHTML = `${data[0].nome}`;
        // document.getElementsByClassName("product")[0].appendChild(title);


        
    </script>


</body>

</html>