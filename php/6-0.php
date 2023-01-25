<?php
// Date/Time
// time
// date
// mktime
// strtotime

// DATE
// untuk menampilkan tanggal dengan format tertentu
// l = hari, d = tanggal, M = bulan, Y = tahun
// echo date("l, d-M-Y \n");

// TIME 
// UNIX Timestamp / EPOCH time : asal mula waktu didunia IT
// mulai dari detik yang sudah belalu sejak 1 januari 1970
// 60 = 1 menit, 60 = 1 jam, 24 = 1 hari, 1000 = untuk banyak nya hari yang diminta. 
// echo date ("l d M Y \n", time()+60*60*24*1000);

// MKtime
// membuat sendiri untuk detik yang diinginkan
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun.
// echo date ("l d M Y \n", mktime(0,0,0,10,21,2002));

// strtotime
// echo date ("l", strtotime("21 oct 2002"));

// string
// strlen
// strcmp
// explode
// htmlspecialchars

// utility
// var_dump
// isset
// empty
// die
// sleep

// function
// function salam ($waktu = "siang", $nama = "galih") {
//     return "selamat $waktu, $nama"; }

// ARRAY
// variabel yang dapat memiliki banyak nilai
// array adalah pasangan antara key dan valeu
// key-nya adalah index, yang dimulai dari 0

// untuk membuat array dengan cara lama
// $hari = array ("senin", "selasa", "rabu");
// // cara baru
// $bulan = ["januari", "februari", "maret"];
// $arr1 = ["123", "tulisan", false];
// var_dump($hari);
// print_r($bulan);
// echo $arr1 [0]; 

// pengulangan pada array
// for / foreach
// $angka = [1,2,3,4,5,6,7,8,9,20];
// for ($i = 0; $i < count($angka); $i++) {
// echo $angka [$i];
// }

// Array didalam Array
// $angka = [[1,2,3],[4,5,6],[7,8,9]];
// echo $angka [1][1];
// echo $angka[2][2];










?>


