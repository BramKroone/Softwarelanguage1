<?php
require 'functions/tools.php';

date_default_timezone_set("Europe/Amsterdam");

/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
*/
function changeColor() {

}



/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel characters het
 * er zijn en welk type het is.
 */

//function CharacterCounterType($value) {
//    echo $value . "<br>";
//    echo strlen($value) . "<br>";
//    echo gettype($value) . "<br>";
//
//}
//
//$person = date("D-M-Y");
//
//CharacterCounterType($person);

/**
 * Schrijf een functie waarbij een array random
 * waarde toont vanuit de array
 */
$array = ["Stephan", "Arie", "Jan", "Polina", "Renee","Wout"];

function ShuffleArray($array) {
    if (!is_array($array)) {
        return;
    } else {
        shuffle($array);
        echo $array[0];
    }
}

ShuffleArray($array);

/**
 * Verplaats alles naar een function directory, en require de function file.
 */





/**
 * Haal de presentatie van een variabele binnen
 */
