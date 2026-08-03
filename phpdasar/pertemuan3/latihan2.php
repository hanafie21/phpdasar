<?php 
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

// $x = 30;
// if ($x < 20) {
//     echo "benar";
// } else {
//     echo "salah";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style> 
</head>
<body>
    

    
    <!-- <table border="1" cellpaddng="10" cellspacng="0">

     <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Umur</td>
     </tr>

     <tr>
        <td>1</td>
        <td>John Doe</td>
        <td>20</td>
     </tr>

     <tr>
        <td>2</td>
        <td>Jane Smith</td>
        <td>25</td>
     </tr>

    </table> -->

    <table border="1" cellpadding="10" cellspacing="0">
      
    <?php for($i = 0; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for($j = 0; $j <= 5; $j++) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>