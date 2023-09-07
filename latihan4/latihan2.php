<?php
// $mahasiswa = [
//     [" Ariella Aprilla", " 036040023", " riprilla@gmail.com", " Teknik Informatika"],
//     [" Bobby Aditama", " 8853040001"," byta@gmail.com", " Teknik Mesin"]
// ];

//Array Associative
//definisinya sama seperti array menarik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Ariella Aprilla",
    "nrp"  => "036040023",
    "email" => "riprilla@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "latihan.png"     
    ],
    [
    "nama" => "Bobby Aditama",
    "nrp"  => "8853040001",
    "email" => "byta@gmail.com",
    "jurusan" => "Teknik Mesin",
    "gambar" => "latihan.png"     
    ] 
];
// echo $mahasiswa[1]["email"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
            <img src="latihan.png" alt="">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Email :<?= $mhs["jurusan"]; ?></li>
            <li>Jurusan :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>