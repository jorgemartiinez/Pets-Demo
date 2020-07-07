<?php

/*
RETORNAR CADENA DE AÑOS Y MESES A PARTIR DE UNA FECHA
*/

function convertToYearsAndMonths($date)
{
    $date1 = date_create($date);
    $date2 = date_create(now());
    $dateDifference = date_diff($date1, $date2)->format('%y años y %m meses');
    return $dateDifference;
}

/*
CONVERTIR UN VALOR DECIMAL A UNA CADENA DEL TIPO:
1 años y 2 meses o
6 meses
*/
function convertToYearsAndMonthsFromFloat($age)
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
