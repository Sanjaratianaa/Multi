<?php
    function connexion(){
        $bdd = mysqli_connect('localhost', 'root', 'root', 'multi');
        mysqli_set_charset($bdd, "utf8");
        return $bdd;
    }
?>