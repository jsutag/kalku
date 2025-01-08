<?php
    function celcius ($sa) {
        return $sa * 4/5;
    }
    function kelvin ($mes) {
        return $mes + 273.15;
    }
    function Fahreinheit ($kos) {
        return (9/5 * $kos) + 32;
    }

    function reamur ($sleb) {
        return (5/4 * $sleb);
    }

    $sa = 70;
    $mes = 70;
    $kos = 70;
    $sleb = 70;
    echo "Hasil dari $sa" . "CC " . "adalah " . celcius($sa) . "°R" . "</br>";
    echo "Hasil dari $mes" . "°C " .  "adalah " . kelvin($mes) . "°K" . "</br>";
    echo "Hasil dari $kos" . "°C " . "adalah " . Fahreinheit($kos) . "°F" . "</br>";
    echo "Hasil dari $sleb" . "°R " . "adalah " . reamur($sleb) . "°C" . "</br>";
?> 