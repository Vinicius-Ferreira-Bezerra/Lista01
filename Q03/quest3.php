<?php
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $sex = $_GET["sex"];

    if($sex == 'Feminino' && $idade < 18){
        echo "$nome, acesso proibido";
    }else{
        echo "$nome, acesso permitido";
    }
?>