<?php 
// Date
// Menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// echo date("l", time() + 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0,)
// jam , menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0, 0, 0, 12, 31, 1998));

// strtotime
echo date("l", strtotime("31 dec 1998"));
?>