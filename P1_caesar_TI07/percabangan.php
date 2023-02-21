<?php

$jam = 23;

echo "Saat ini pukul: $jam <br>";

$hasil = $jam < 12;

if($hasil){
    echo "Selamat Pagi!";
}elseif ($jam < 18){
    echo "selamat sore!";
}else{
    echo "Selamat Malam";
}

?>