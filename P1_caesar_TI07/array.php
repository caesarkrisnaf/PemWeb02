<?php
//array index
$animals = ['Macan','Kucing','Beruang','Ayam'];

//menambahkan data ke array
array_push($animals, "Kambing");

//mengakses array
var_dump($animals);

//array assosiatif
$animal = [
    'nama' => $animals[2],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

//mengakses array assosiatif
echo $animal['jenis'];

?>