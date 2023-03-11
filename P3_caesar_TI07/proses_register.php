<?php
if(isset($_POST['submit'])){
    $Nim = $_POST['nim'];
    $Nama = $_POST['nama'];
    $Jenis_Kelamin = $_POST['gender'];
    $Prodi = $_POST['prodi'];

    if (!empty($_POST['skill'])) {
        $skills = $_POST['skill'];
    }

    $Domisili = $_POST['domisili'];
    $Email = $_POST['email'];

    echo "NIM: $Nim";
    echo "<br> Nama: $Nama";
    echo "<br> Jenis Kelamin: $Jenis_Kelamin";
    echo "<br> Program Studi: $Prodi";
    echo "<br> Skill Programming: ";

    $listNilai = [];

    if (!empty($_POST['skill'])) {
        foreach($skills as $skill){

            if ($skill == 'HTML'){
                array_push($listNilai, 10);
            } else if ($skill == 'CSS') {
                array_push($listNilai, 10);
            } else if ($skill == 'JavaScript'){
                array_push($listNilai, 20);
            } else if ($skill == 'RWD Boostrap'){
                array_push($listNilai, 20);
            } else if ($skill == 'PHP'){
                array_push($listNilai, 30);
            } else if($skill == 'Python'){
                array_push($listNilai, 30);
            } else {
                array_push($listNilai, 50);
            }
    
            echo $skill. ", ";
        }
    }

    $nilai = array_sum($listNilai); 

    echo "<br> Domisili: $Domisili";
    echo "<br> Email: $Email";
    echo "<br> Total Nilai: $nilai";

    if ($nilai == 0){
        echo "<br> Predikat: Tidak Memadai";
    } else if ($nilai > 0 AND $nilai <= 40)  {
        echo "<br> Predikat : Kurang";
    } else if ($nilai > 40 AND $nilai <= 60) {
        echo "<br> Predikat : Cukup";
    } else if ($nilai > 60 AND $nilai <= 100 ) {
        echo "<br> Predikat : Baik";
    } else {
        echo "<br> Predikat : Sangat Baik";
    }
}
?>