<?php
if(!isset($_COOKIE["visits"])){
    setcookie("visits", "1", time() + 3600 * 24); 
} else {
    $visits = (int)$_COOKIE["visits"];
    $visits++;
    setcookie("visits", $visits, time() + 3600 * 24); 
}
if (isset($_COOKIE["visits"])) {
    echo "Número de visitas: " . $_COOKIE["visits"];
} else {
    echo "No hay información de visitas almacenada en las cookies.";
}
?>