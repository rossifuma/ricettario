<?php

    require("./config.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {



        // PER INSERIRE I DATI PROVENIENTI DAL FORM SI DEVONO ESEGUIRE DEI PASSAGGI:
        $prova = json_encode($_POST); //CONVERSIONE DA OGGETTO A JSON
        $bson = MongoDB\BSON\fromJSON($prova); //DA JSON A BSON
        $row = MongoDB\BSON\toPHP($bson); // DA BSON A OGGETTO PHP
        $collection->insertOne($row); //INSERIMENTO OGGETTO NEL DB
    }
    header('Location: ./cerca.html');
    exit;
    // AGGIUNGERE IL CONTROLLO SULL'ESISTENZA DELLA RICETTA PRIMA DI INSERIRLA
?>