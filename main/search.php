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
        <!-- <a class="about" href="">Chi sono</a> -->
        <a class="about" href="./cerca.html">Torna indietro</a>

    </nav>

    <hr>
    <div class="container">

        <div class="product">
            <div class="description">titolo prima immagine</div>
            <img src="https://via.placeholder.com/300" alt="">
        </div>

    </div>






































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
            creaNodo(data);
            // console.log(data[i].nome);
        }

        function creaNodo(data){

            
        }
    </script>




</body>

</html>