<?php
    include("connexion.php");

    function getContenu($language = 'fr'){
        $query="SELECT * FROM contenu WHERE langue = '".$language."'";
        $resultat = mysqli_query(connexion(),$query);
        
        $result = null;
        while( $valiny = mysqli_fetch_assoc($resultat) ){
            $result = $valiny;
        }
        return json_encode($result);
    }

    function getJsonData($language = 'fr'){
        $path = "exemple.json";
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);
        $res = Array($jsonData[0][$language], $jsonData[0]["languages"]);
        return json_encode($res);
    }
?>