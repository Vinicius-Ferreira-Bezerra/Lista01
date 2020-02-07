<?php
    $num1 = $_GET["num01"];
    $num2 = $_GET["num02"];

    $soma = $num1 + $num2;

    if($soma >20){
        echo $soma += 8;
    }else{
        echo $soma -= 5;
    }