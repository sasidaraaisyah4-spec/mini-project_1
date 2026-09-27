<?php
// products.php
// Penampung multidimensional array untuk data komoditas kedai kopi
$products = [
    [
        "id" => "KOP-01",
        "nama" => "Biji Kopi Arabika Gayo",
        "kategori" => "Bahan Baku",
        "harga" => 125000,
        "stok" => 15,
        "deskripsi" => "Biji kopi single origin roasting medium dari Aceh"
    ],
    [
        "id" => "SYR-01",
        "nama" => "Sirup Karamel Monin",
        "kategori" => "Pelengkap",
        "harga" => 160000,
        "stok" => 2, // Stok kritis (< 3)
        "deskripsi" => "Sirup premium perasa karamel untuk variasi latte"
    ],
    [
        "id" => "DRY-01",
        "nama" => "Susu UHT Full Cream",
        "kategori" => "Bahan Baku",
        "harga" => 22000,
        "stok" => 24,
        "deskripsi" => "Susu sapi segar untuk bahan dasar minuman susu"
    ],
    [
        "id" => "FOD-01",
        "nama" => "Croissant Almond",
        "kategori" => "Makanan",
        "harga" => 35000,
        "stok" => 1, // Stok kritis (< 3)
        "deskripsi" => "Pastry renyah dengan isian dan taburan kacang almond"
    ],
    [
        "id" => "PKG-01",
        "nama" => "Gelas Kertas Takeaway 12oz",
        "kategori" => "Kemasan",
        "harga" => 1200,
        "stok" => 150,
        "deskripsi" => "Gelas ramah lingkungan untuk minuman panas"
    ]
];
?>