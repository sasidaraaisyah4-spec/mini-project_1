## Rincian Komponen Blueprint

### 1. Data Layer (`products.php`)
* Peran: Bertindak sebagai penampung data mentah (mock data).
* Struktur Data: Menggunakan Multidimensional Array PHP.
* Atribut Data:
  - `id`: Identitas unik produk (misal: kode komoditas)
  - `nama`: Nama produk/barang
  - `kategori`: Kategori barang
  - `harga`: Harga satuan produk
  - `stok`: Jumlah ketersediaan produk
  - `deskripsi`: Informasi singkat produk

### 2. Processing Layer (`functions.php`)
* Peran: Bertanggung jawab atas logika bisnis dan kalkulasi data.
* Fungsi Utama:
  - `hitungTotalNilaiStok(array $products)`: Menghitung akumulasi total nilai aset dengan mengalikan `harga` × `stok` dari setiap item.
  - `isStokKritis(int $stok)`: Mengecek kondisi stok produk. Mengembalikan nilai boolean (`true`/`false`) jika stok bernilai di bawah threshold (stok < 3).

### 3. Presentation Layer (`index.php`)
* Peran: Menyajikan antarmuka pengguna (*User Interface*) berbasis HTML.
* Alur Kerja:
  1. Mengintegrasikan `products.php` dan `functions.php` menggunakan `require_once`.
  2. Melakukan iterasi (`foreach`) untuk merender data produk ke dalam tabel HTML.
  3. Menerapkan kondisi CSS dinamis untuk memberikan penanda visual (warna latar belakang) pada produk dengan stok kritis (`stok < 3`).
  4. Menampilkan ringkasan total nilai seluruh aset di bagian antarmuka tabel.