<?php
$phrase='ojo';
$phrase=$phrase.str_replace(" ","",strtolower($phrase) );
$reverse=strrev($phrase);

    if ($phrase==$reverse){
        echo "it is a palindrome";
    }
    else{
        echo "it is not a palindrome";
    }


?>