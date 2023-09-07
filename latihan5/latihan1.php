<?php
//  variabel scope / lingkup variabel
// $x = 10;
// echo $x;

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Amrita Nur Fatihah";
// $_GET["nrp"] = "123456789";
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
    ],
    [
        "nama" => "Regina Valeria",
        "nrp" => "1234597456",
        "email" => "ginalee@gmail.com",
        "jurusan" => "Matematika",
        "gambar" => "latihan.png"
    ]
    ];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <!-- <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["nrp"]; ?></li> -->
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
</ul>
<?php endforeach; ?>

</body>
</html>