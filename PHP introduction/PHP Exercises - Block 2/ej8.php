<?php
$filePath = 'resources/config.php';

function checkfile($filePath){
    if (!file_exists($filePath)) {
    throw new Exception ('The file do not exists.');
    } echo "The file exists.";
}

try {
checkfile($filePath);
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>