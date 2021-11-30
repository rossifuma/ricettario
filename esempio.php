<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    


<?php
    require ("config.php");
    $cursor = $collection->find();

    foreach ($cursor as $restaurant) {
        $dato = $restaurant["nome"];
    }


    echo "il piatt giorno è " . $dato;
    // $data = $db->find();
    // $db = $client->ricette;
    ?>
</body>

</html>