<?php

// Fungsi untuk menghitung diskon
function hitung_diskon($total_belanja) {
  if ($total_belanja >= 100000) {
    $diskon = $total_belanja * 0.1;
  } elseif ($total_belanja >= 50000 && $total_belanja < 100000) {
    $diskon = $total_belanja * 0.05;
  } else {
    $diskon = 0;
  }
  return $diskon;
}

// Prosedur untuk menghitung total yang harus dibayar
function hitung_total_bayar($total_belanja) {
  $diskon = hitung_diskon($total_belanja);
  $total_bayar = $total_belanja - $diskon;
  return $total_bayar;
}

// Contoh penggunaan
$total_belanja = 120000;
$diskon = hitung_diskon($total_belanja);
$total_bayar = hitung_total_bayar($total_belanja);

// Tampilkan hasil
echo "Total Belanja: Rp. $total_belanja\n";
echo "Diskon: Rp. $diskon\n";
echo "Total Bayar: Rp. $total_bayar\n";

?>


P