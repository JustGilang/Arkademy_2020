<?php
$text = 'Halo Arkademian !';
$arr = explode(" ", $text);
$count = count($arr);
for($i=0; $i < $count; $i++){
    $max = $arr[$i];
    $index = $i;
    for($j = $i + 1; $j < $count; ++$j){
        if(strlen($arr[$j]) > strlen($max)){
            $max = $arr[$j];
            $index = $j;
        }
    }
    $tmp = $arr[$index];
    $arr[$index] = $arr[$i];
    $arr[$i] = $tmp;
    if($i == 3) break;
}
echo "Kalimat :" .$text ."<br>";
for($i=0; $i <1; $i++){
    echo "Kata Terpanjang :" .$arr[$i];
}
echo "<br><br>";

$text = 'Seluruh Arkademian mengucapkan selamat Ramadhan !';
$arr = explode(" ", $text);
$count = count($arr);
for($i=0; $i < $count; $i++){
    $max = $arr[$i];
    $index = $i;
    for($j = $i + 1; $j < $count; ++$j){
        if(strlen($arr[$j]) > strlen($max)){
            $max = $arr[$j];
            $index = $j;
        }
    }
    $tmp = $arr[$index];
    $arr[$index] = $arr[$i];
    $arr[$i] = $tmp;
    if($i == 3) break;
}
echo "Kalimat :" .$text ."<br>";
for($i=0; $i <1; $i++){
    echo "Kata Terpanjang :" .$arr[$i];
}
echo "<br><br>";

$text = 'Baju ini sangat bagus sekali !';
$arr = explode(" ", $text);
$count = count($arr);
for($i=0; $i < $count; $i++){
    $max = $arr[$i];
    $index = $i;
    for($j = $i + 1; $j < $count; ++$j){
        if(strlen($arr[$j]) > strlen($max)){
            $max = $arr[$j];
            $index = $j;
        }
    }
    $tmp = $arr[$index];
    $arr[$index] = $arr[$i];
    $arr[$i] = $tmp;
    if($i == 3) break;
}
echo "Kalimat :" .$text ."<br>";
for($i=0; $i <1; $i++){
    echo "Kata Terpanjang :" .$arr[$i];
}
?>