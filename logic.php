<?php
    print_r($_POST);
    $values = Array();

    $wordnumber = $_POST["words"];
    $words = array("dog","milk","funny","beach","headphones","spider","knob","broom","spin","water","always","bulb","curtain","lovely","sneak");
    $password = array_rand($words, $wordnumber);
    
$count=0;

if ($_POST["spechar"] == TRUE ) {
    $chars = array("#","$","&","*","@","+");
    $char = array_rand($chars, 1);
};
    

?>