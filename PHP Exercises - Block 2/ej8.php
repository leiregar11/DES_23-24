<?php
$filePath = 'resources/config.php';

function checkfile($filePath){
    if (file_exists($filePath)) {
    echo "The file exists.";
    }else{
        throw new Exception ('The file do not exists.');
    }
}

try {
checkfile($filePath);
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>