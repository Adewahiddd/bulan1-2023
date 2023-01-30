

<?php
// Belajar PHP: Memahami Prosedur dan Fungsi

// 01
// mmbuat fungsi
function perkenalan(){
  echo "Assalamulaikmu, \n";
  echo "Perkenalkan, nama saya Ardianta \n";
  echo "Senang berkenalan dengan anda \n";
}

// memanggil fungsi yang sudah dibuat
perkenalan();

echo "\n";

// memanggilnya lagi
perkenalan();

// 02
// membuat fungsi
function kenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."\n";
    echo "Senang berkenalan dengan anda \n";
  }
  
  // memanggil fungsi yang sudah dibuat
  kenalan("Muhardian", "Hi");
  
    echo "\n";
  
    $saya = "Indry";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi
    kenalan($saya, $ucapanSalam);

    // 03
    function kenal($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."\n";
        echo "Senang berkenalan dengan anda \n";
      }
      
      // memanggil fungsi yang sudah dibuat
      kenal("Muhardian", "Hi");
      
      echo "\n";
      
      $saya = "Indry";
      $ucapanSalam = "Selamat pagi";
      // memanggilnya lagi tanpa mengisi parameter salam
      kenal($saya);

    // 04
    // membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  echo "Umur saya adalah ". hitungUmur(1994, 2015) ." tahun";

// 05
// membuat fungsi
function itungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  function perkenal($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."\n";
    // memanggil fungsi lain
    echo "Saya berusia ". itungUmur(1994, 2015) ." tahun \n";
    echo "Senang berkenalan dengan anda \n";
  }
  // memanggil fungsi perkenalan
  perkenalan("Ardianta");

// 06

function faktorial($angka) {
    if ($angka < 2) {
      return 1;
    } else {
    // memanggil dirinya sendiri
    return ($angka * faktorial($angka-1));
    }
  }
  
  // memanggil fungsi
  echo "faktorial 5 adalah " . faktorial(5);


?>