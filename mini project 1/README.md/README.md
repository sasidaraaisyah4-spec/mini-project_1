# Mini Project 1: Product Information System

Proyek ini merupakan rancangan cetak biru (*blueprint*) dan implementasi sederhana dari **Sistem Informasi Manajemen Produk** berbasis PHP. Sistem ini dibangun dengan menerapkan pemisahan arsitektur 3 lapis (*3-Tier Architecture*) untuk memisahkan data, logika pemrosesan bisnis, dan antarmuka tampilan.

---

## 📁 Struktur Berkas

Project ini terdiri dari 3 berkas utama sesuai dengan pemisahan tugas arsitektur (*Separation of Concerns*):

```text
.
├── products.php   # Data Layer (Penampung Multidimensional Array)
├── functions.php  # Processing Layer (Fungsi & Logika Bisnis)
└── index.php      # Presentation Layer (Tampilan HTML & Perulangan)
```

---

## 🏗️ Rincian Komponen Blueprint

### 1. Data Layer (`products.php`)
* **Peran:** Bertindak sebagai penampung data mentah (*mock data*).
* **Struktur Data:** Menggunakan *Multidimensional Array* PHP.
* **Atribut Data:**
  - `id`: Identitas unik produk (misal: kode komoditas).
  - `nama`: Nama produk/barang.
  - `kategori`: Kategori barang.
  - `harga`: Harga satuan produk.
  - `stok`: Jumlah ketersediaan produk.
  - `deskripsi`: Informasi singkat produk.

### 2. Processing Layer (`functions.php`)
* **Peran:** Bertanggung jawab atas logika bisnis dan kalkulasi data.
* **Fungsi Utama:**
  - `hitungTotalNilaiStok(array $products)`: Menghitung akumulasi total nilai aset gudang dengan mengalikan `harga` × `stok` dari setiap item.
  - `isStokKritis(int $stok)` / `cekPeringatanStok(int $stok)`: Mengecek kondisi ketersediaan stok. Mengembalikan indikator jika stok bernilai di bawah batas aman (`stok < 3`).

### 3. Presentation Layer (`index.php`)
* **Peran:** Menyajikan antarmuka pengguna (*User Interface*) berbasis HTML.
* **Alur Kerja:**
  1. Mengintegrasikan `products.php` dan `functions.php` menggunakan `require_once`.
  2. Melakukan iterasi (`foreach`) untuk merender data produk ke dalam tabel HTML.
  3. Menerapkan kondisi CSS dinamis untuk memberikan penanda visual (penyorotan warna) pada produk dengan stok kritis (`stok < 3`).
  4. Menampilkan ringkasan total nilai seluruh aset di bagian atas antarmuka tabel.

---

## 🚀 Cara Menjalankan Proyek

1. **Prasyarat:** Pastikan PHP (versi 7.4 atau lebih baru) sudah terinstal di komputer Anda (atau menggunakan XAMPP/Laragon/WAMP).
2. **Kloning / Salin Berkas:** Letakkan ketiga berkas (`products.php`, `functions.php`, dan `index.php`) ke dalam satu direktori/folder yang sama.
3. **Jalankan Web Server:**
   * **Menggunakan Built-in Server PHP:**
     Buka terminal/command prompt pada folder proyek, lalu jalankan perintah:
     ```bash
     php -S localhost:8000
     ```
   * **Menggunakan XAMPP/Laragon:**
     Pindahkan folder proyek ke dalam direktori `htdocs` (XAMPP) atau `www` (Laragon).
4. **Akses via Browser:** Buka browser dan kunjungi `http://localhost:8000` (atau `http://localhost/nama-folder-proyek`).