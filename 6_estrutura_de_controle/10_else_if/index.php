<?php

    // Else if

    $a = 10;
    $b = 5;
    $c = 8;
    $msgIf = "Entrou no if";
    $msgElse = "Entrou no else";
    $msgElseIf = "Entrou no else if";

    if ($a < $b) {

        echo $msgIf . " 1. <br><br>";
        
    }else if ($a > $b) {

        echo $msgElseIf . " 1. <br><br>";

    }else if (11 > 1) {

        echo $msgElseIf . " 2. <br><br>";

    }else {
        
        echo $msgElse . " (do If inicial). <br><br>";

    }

    if ($a < $b) {

        echo $msgIf . " 1. <br><br>";
        
    }else if ($a < $c) {

        echo $msgElseIf . " 1. <br><br>";

    }else if ($a == $b) {

        echo $msgElseIf . " 2. <br><br>";

    }else {
        
        echo $msgElse . " (do If inicial). <br><br>";

    }