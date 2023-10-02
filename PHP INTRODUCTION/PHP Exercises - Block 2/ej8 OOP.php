<?php

class File{
    private $filePath;
    public function __construct($filePath){
        $this->filePath=$filePath;
    }

    public function checkfile(){
        if (!file_exists($this->filePath)) {
        throw new Exception ('The file do not exists.');
        } echo "The file exists.";
    }

}


try {

    $file=new File('resources/config.php');
$file->checkfile();
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>