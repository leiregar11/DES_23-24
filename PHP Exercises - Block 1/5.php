<?php

$age=20;
$heigth=110;
$accompanied=false;
        if($age<10 ){
            if($accompanied==true && $age>=6 ){
                echo "you can climb";
            }
            else{
                echo "you can not climb";
            }
        }elseif($heigth<120){
            echo "you can not climb";
        }else{
            echo "you can climb";
        }
    

?>