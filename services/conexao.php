<?php
    $hostname = "localhost";
    $bancodedados ="livraria";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
    if ($mysqli->connect_errno){
        echo"erro na sua conexáo(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }




?>