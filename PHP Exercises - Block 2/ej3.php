<?php
$randomN=[];
$max=0;
$min=100;
$sum=0;
for($i=0;$i<20;$i++){
    $num=random_int($max,$min);
    $randomN[]=$num;
   
        $sum+=$num;
}
sort($randomN);
for($s=0;$s<count($randomN);$s++){
    if($max<=$randomN[$s]){
    $max=$randomN[$s];
}if($min>$randomN[$s]){
    $min=$randomN[$s];
}

}

echo "<p>ARRAY: ";
for($j=0;$j<count($randomN);$j++){
    if($max==$randomN[$j]){
        echo "<span style='color:green'> ".($randomN[$j])." </span>";
    }elseif($min==$randomN[$j]){
        echo "<span style='color:blue'>".($randomN[$j])."</span>";

    }else{
        echo " ".($randomN[$j])." ";

    }
}
echo "</p>";

echo "<br><p>Max: $max</p>";
echo "<br><p>Min: $min</p>";
echo "<br><p>Sum: $sum</p>";
echo "<br><p>Mean: ".($sum/20)."</p>";



?>