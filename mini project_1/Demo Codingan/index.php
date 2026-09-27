<?php
// index.php
// Merajut komponen data dan fungsi menggunakan require_once
require_once 'products.php';
require_once 'functions.php';

// Memanggil fungsi kalkulasi aset gudang
$totalNilaiAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Produk - Kedai Kopi</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #fcf9f2; /* Warna krem pucat */
            color: #3e2723; /* Warna kopi gelap */
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 { border-bottom: 2px solid #795548; padding-bottom: 10px; }
        .aset-info {
            background-color: #d7ccc8;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            margin-bottom: 20px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid #d7ccc8; 
            padding: 12px; 
            text-align: left; 
        }
        th { 
            background-color: #795548; 
            color: white; 
        }
        
        /* Logika visual dari presentation layer */
        .baris-aman { background-color: #ffffff; }
        /* Warna untuk stok kritis yang difilter oleh functions.php */
        .baris-peringatan { 
            background-color: #ffcdd2; 
            color: #b71c1c; 
        }
        .badge-kritis {
            background-color: #b71c1c;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 12px;
            margin-left: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>☕ Mini Project 1: Product Information System</h2>
    <p>Manajemen Persediaan Gudang Kedai Kopi</p>

    <div class="aset-info">
        <strong>Estimasi Total Nilai Aset Gudang: </strong> 
        Rp <?php echo number_format($totalNilaiAset, 0, ',', '.'); ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Komoditas</th>
                <th>Kategori</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Deskripsi Singkat</th>
            </tr>
        </thead>
        <tbody>
            <!-- Merender data via perulangan foreach sesuai instruksi -->
            <?php foreach ($products as $kopi): ?>
                <tr class="<?php echo cekPeringatanStok($kopi['stok']); ?>">
                    <td><?php echo $kopi['id']; ?></td>
                    <td><?php echo $kopi['nama']; ?></td>
                    <td><?php echo $kopi['kategori']; ?></td>
                    <td>Rp <?php echo number_format($kopi['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <?php 
                            echo $kopi['stok']; 
                            // Tambahan visual jika stok kritis
                            if ($kopi['stok'] < 3) {
                                echo ' <span class="badge-kritis">Kritis</span>';
                            }
                        ?>
                    </td>
                    <td><?php echo $kopi['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>