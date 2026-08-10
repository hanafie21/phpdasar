<?php 

// $mahasiswa = [["Hanafie Rizal", "412020611019",
// "Teknik Informatika", "hanafie.rizal@example.com"],
// ["Hanafie Rizal", "412020611019",
// "Teknik Informatika", "hanafie.rizal@example.com"],
// ]

// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Hanafie Rizal",
        "nim" => "412020611019",
        "prodi" => "Teknik Informatika",
        "email" => "hanafie.rizal@example.com",
        "gambar" => "hanafie.jpg"
        
    ],
    [
        "nama" => "Fulan Fulan",
        "nim" => "412020611019",
        "prodi" => "Teknik Industri",
        "email" => "fulan.fulan@example.com",
        "gambar" => "fulan.jpg"
    ]
        
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
      
         <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>">          
         </li>
        <li>Nama Lengkap: <?php echo $mhs["nama"]; ?></li>
        <li>NIM         :<?php echo $mhs["nim"]; ?></li>
        <li>Program Stud:<?php echo $mhs["prodi"]; ?></li>
        <li>Email       :<?php echo $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body> 
</html>
