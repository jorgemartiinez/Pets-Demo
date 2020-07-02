<?php

/*
CONVERTIR UN VALOR DECIMAL A UNA CADENA DEL TIPO:
1 años y 2 meses o
6 meses
*/
function convertToYearsAndMonths($age)
{
    $ageStr = (string) $age;
    $integer = (int) explode('.', $ageStr)[0];
    $decimal = (int) explode('.', $ageStr)[1];

    $cadena = '';

    if ($integer > 0 && $decimal > 0) {
        $cadena .= $integer . ' años y ' . $decimal . ' meses';
    } else if ($integer <= 0 && $decimal > 0) {
        $cadena .= $decimal . ' meses';
    } else {
        $cadena .= $integer . ' años';
    }
    return $cadena;
}
