# Inventory Management System - Pertemuan 5 (Laravel)

## 1. Penjelasan Singkat Arsitektur MVC
Project ini dibangun menggunakan arsitektur Model-View-Controller (MVC) pada Laravel:
- **Model (`App\Models\Item`)**: Mengelola struktur data dan interaksi dengan tabel `items` di database menggunakan Eloquent ORM.
- **View (`resources/views/items.blade.php` & `create_item.blade.php`)**: Menampilkan antarmuka pengguna (UI) berupa tabel data barang dan form tambah barang menggunakan Blade.
- **Controller (`App\Http\Controllers\ItemController`)**: Menghubungkan Model dan View. Menangani logika bisnis seperti mengambil data, menampilkan form, serta memvalidasi dan menyimpan data baru.

## 2. Alur Demonstrasi Fitur (CRUD - Store)
1. **Membuka Form**: Mengakses route `/items/create` dengan mengeklik tombol `+ Tambah Barang Baru`.
2. **Validasi**: Saat form dikirim (POST), `ItemController@store` memvalidasi input (Nama wajib diisi, Jumlah & Harga berupa angka).
3. **Simpan**: Data yang lolos validasi disimpan ke database SQLite via Eloquent `Item::create()`.
4. **Redirect & Tampilkan Data**: Pengguna di-redirect ke `/items` disertai notifikasi sukses dan data terbaru muncul di tabel.

## 3. Petunjuk Instalasi Project
1. Clone repository ini:
   ```bash
   git clone [https://github.com/dea-project07x/miniproject4.git](https://github.com/dea-project07x/miniproject4.git)
   cd miniproject4
