<?php 

$mahasiswa = [["Hanafie Rizal", "412020611019", 
"Teknik Informatika", "hanafirizal7528@gmail.com" ],
["Hanafie Rizal", "412020611019", 
"Teknik Informatika", "hanafirizal7528@gmail.com" ],
["Roy", "412020611019", 
"Teknik Informatika", "hanafirizal7528@gmail.com" ]
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
        <li>Nama Lengkap:<?php echo $mhs[0]; ?></li>
        <li>NIM         :<?php echo $mhs[1]; ?></li>
        <li>Prodi       :<?php echo $mhs[2]; ?></li>
        <li>Email       :<?php echo $mhs[3]; ?></li>

        
    </ul>
    <?php endforeach; ?>
</body>
</html>