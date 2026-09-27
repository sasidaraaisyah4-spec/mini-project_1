<?php
// functions.php

// Fungsi untuk mengalkulasi nilai aset gudang (Harga x Stok dari seluruh produk)
function hitungTotalNilaiStok($dataBarang) {
    $totalAset = 0;
    foreach ($dataBarang as $item) {
        $totalAset += ($item['harga'] * $item['stok']);
    }
    return $totalAset;
}

// Logika conditional untuk menyaring warna baris tabel jika stok kritis (< 3)
function cekPeringatanStok($jumlahStok) {
    if ($jumlahStok < 3) {
        // Mengembalikan nama class CSS khusus jika stok menipis
        return "baris-peringatan"; 
    } else {
        // Mengembalikan string kosong jika stok masih aman
        return "baris-aman";
    }
}
?>