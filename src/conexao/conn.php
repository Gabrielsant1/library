<?php

    $hostmane = "sql101.epizy.com";
    $dbname = "epiz_28916585_library";
    $username = "epiz_28916585";
    $password = "HNsxlWYw1u6E";

    try {
        $pdo = new PDO('mysql:host='.$hostmane.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conexão Bem Sucedida';
    } catch (PDOException $e) {
        echo 'Conexão Mal Sucedida, Erro: '.$e->getMessage();
    }