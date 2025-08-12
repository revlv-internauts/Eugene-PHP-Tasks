<?php

function calculateSpeed() {
    $distance = 5;
    $time = 9;
    $speed = $distance / $time;
    return $speed;
}

function moonWeight() {
    $earthWeight = 61;
    $mWeight = $earthWeight / 6;
    return $mWeight;
}

function tempConversion() {
    $celsius = 25;
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

function kineticEnergyCalculator() {
    $mass = 20;
    $velocity = 5;
    $kE = 0.5 * $mass * ($velocity * $velocity);
    return $kE;
}

function lightTravelTime() {
    $distanceinKM = 300000;
    $speedoflightinKmPerSec = 299792;
    $timeinSec = $distanceinKM / $speedoflightinKmPerSec;
    return $timeinSec;
}

require 'index.view.php';