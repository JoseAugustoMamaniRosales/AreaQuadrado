<?php
    include ("quadrado.class.php");

    function calcularArea($lado){
        $area=$lado*$lado;       
        $dobro=$area*2;
        echo "Área do quadrado: " . $area . " cm² <br> Dobro da área: " . $dobro . " cm²";     
    }

    $quadrado = new Quadrado();
    $quadrado->setLado($_GET ['txtLado']);

    calcularArea($_GET ['txtLado']);
    
?>