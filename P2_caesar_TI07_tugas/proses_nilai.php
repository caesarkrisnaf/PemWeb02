<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $rata_rata = ($uts + $uas + $praktikum) /3;
    
if ($rata_rata >= 85 AND $rata_rata <= 100){
    $grade = "A";
}
elseif ($rata_rata >= 70 AND $rata_rata <= 84){
    $grade = "B";
}
elseif($rata_rata >= 56 AND $rata_rata <= 69){
    $grade = "C";
}
elseif($rata_rata >= 36 AND $rata_rata <= 55){
    $grade = "D";
} 
else {
    $grade = "E";
}


    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul<br>";
    echo "Nilai UTS: $uts<br>";
    echo "Nilai UAS: $uas<br>";
    echo "Nilai Praktikum: $praktikum<br>";
    echo "Nilai Rata-Rata: $rata_rata<br>";
    echo "Grade Nilai:$grade"; 
} else {
    echo "Tidak ada data";
}
?>