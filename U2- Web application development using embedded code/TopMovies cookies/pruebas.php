<?php

// El string que contiene los datos en un formato no estructurado
$string = '[movie1] => Movie Object
        (
            [name:Movie:private] => Movie 1
            [year:Movie:private] => 2022
        )

    [movie2] => Movie Object
        (
            [name:Movie:private] => Movie 2
            [year:Movie:private] => 2023
        )';

// Patrones de expresiones regulares para extraer claves y valores
$pattern = "\[(.*?)\] => Movie Object\s*\(\s*\)\s*{\s*\[name:Movie:private\] => (.*?)\s*\[year:Movie:private\] => (\d+)\s*}/ms";

// Variables para almacenar claves y valores
$keys = [];
$values = [];

// Encuentra todas las coincidencias usando expresiones regulares
if (preg_match_all($pattern, $string, $matches, PREG_SET_ORDER)) {
    foreach ($matches as $match) {
        $keys[] = $match[1];
        $values[] = ['name' => $match[2], 'year' => intval($match[3])];
    }
}

// Construye el array asociativo
$result = array_combine($keys, $values);

// Ahora $result contiene el array asociativo
print_r($result);

?>
