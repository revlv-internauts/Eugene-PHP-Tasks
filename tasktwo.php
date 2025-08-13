<?php

function countArray() {
$keyText = ["Alice" => 0];

$textFile = fopen('alice_in_wonderland.txt', 'r');

while (!feof($textFile)) {
    $pointer = trim(fgets($textFile)); 
    $words = explode(" ", $pointer);
    foreach ($words as $word) {
        //array_key_exists yung nagtitingin kung nag eexist yung key sa array na $textFile
        if (array_key_exists($word, $keyText)) {
            $keyText[$word]++;
        }
    }
}

foreach ($keyText as $word => $count) {
    echo $word . " occured " . $count .  " times" . PHP_EOL;
}

}

require 'tasktwo.view.php';
