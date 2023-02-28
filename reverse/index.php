<?php

// reversing the order of a given string without affecting the order of the special characters

function reverse($word){
    // string
    $string = [];
    // symbols
    $symbols = [];

    // Loop
    for ($i=0; $i < strlen($word); $i++) { 
        // seperate symbols from the letters
        if (ctype_alpha($word[$i])) {
           $string[] = $word[$i];
        }
        else{
            $symbols[$i] = $word[$i];
        }
    }

    //echo "<p>Letters</p>";
    //print_r($string);

    //echo "<p>Symbols</p>";
    //print_r($symbols);

    // Reverse letters array
    $string = array_reverse($string);

    foreach ($symbols as $i => $symbol) {
        //echo "<p>Index = $i, Symbols = $symbol</p>";
        array_splice($string, intval($i), 0, $symbol);
    }

    return implode("", $string);

    

 }