Oke! Berikut versi `README.md` yang sudah **diperbarui dan disesuaikan** berdasarkan deskripsi kamu. Tinggal copy langsung ke file `README.md` di root folder project kamu:

---

```markdown
# 🍽 Kantin Mahasiswa

Aplikasi web berbasis CodeIgniter 3 untuk mengelola data makanan dan transaksi di kantin kampus.  
Project ini dikerjakan secara kolaboratif oleh 4 anggota tim sebagai tugas proyek kuliah.

🔗 Link: [http://localhost:8080/kantin-mahasiswa/index.php/makanan](http://localhost:8080/kantin-mahasiswa/index.php/makanan)

---

## 🚀 Teknologi yang Digunakan

- CodeIgniter 3
- PHP 7.x
- MySQL (XAMPP)
- Bootstrap (untuk antarmuka)
- Git & GitHub (untuk kolaborasi)

---

## 👥 Tim & Branch

| Nama Anggota | Tugas                         | Branch         |
|--------------|-------------------------------|----------------|
| michael      | Leader, integrasi & pengawasan | `main`         |
| blackii       | CRUD makanan & database        | `feature/crud` |
| melkior      | Desain antarmuka (UI)          | `feature/ui`   |
| pedro        | Dokumentasi & panduan sistem   | `feature/docs` |

---

## 📁 Struktur Folder Proyek

kantin-mahasiswa/
├── application/
│   ├── config/
│   ├── controllers/
│   │   └── Makanan.php
│   ├── models/
│   │   ├── Makanan_model.php
│   │   └── Order_model.php                # ✅ Model untuk manajemen pesanan
│   ├── views/
│   │   ├── layout/
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   └── makanan/
│   │       ├── index.php
│   │       ├── tambah.php
│   │       ├── edit.php
│   │       ├── form.php                  # ✅ Form pemesanan (admin)
│   │       ├── pembayaran.php            # ✅ Pilih metode & lakukan pembayaran
│   │       └── selesai.php               # ✅ Konfirmasi pembayaran sukses
├── assets/
│   ├── css/
│   │   └── makanan.css                   # ✅ Style kustom modern
│   └── img/
│       └── qris.png                      # ✅ Gambar QR untuk metode QRIS
├── uploads/                              # ✅ Folder upload gambar makanan
├── .gitignore
├── README.md
└── index.php

```

## 📝 Fitur Utama

- ✅ CRUD Data Makanan (Tambah, Edit, Hapus, Lihat)
- ✅ Upload gambar makanan
- ✅ Tampilan galeri makanan dengan desain kartu
- 🛠 (Coming Soon) Fitur transaksi dan order

---

## ⚙️ Cara Menjalankan

1. Clone repositori ke dalam folder `htdocs/` (XAMPP).
2. Buat database MySQL bernama `kantin`.
3. Import file SQL: `kantin.sql`.
4. Atur `database.php` di `application/config/` sesuai koneksi lokal kamu.
5. Jalankan lewat browser:  
   `http://localhost:8080/kantin-mahasiswa/index.php/makanan`

---

## 💡 Catatan

- Pastikan folder `uploads/` sudah ada dan dapat ditulis (`chmod 777` jika di Linux).
- Untuk edit data, pastikan ID valid dan gambar tersedia.
- Jika error `Call to undefined function site_url()` muncul, pastikan CodeIgniter sudah aktif dan base_url dikonfigurasi.

---

## 🤝 Kontribusi

Kontribusi dari tim dilakukan melalui branching pada GitHub.  
Pull request, issue, dan diskusi dilakukan sesuai tugas masing-masing anggota tim.

# 📦 Progres Pengembangan Sistem Pemesanan & Pembayaran Kantin Mahasiswa

## 📅 Tanggal: 21 Juni 2025

---

## ✅ Progress Harian

### 1. Fitur Menu Makanan (CRUD)
- [x] Menampilkan daftar makanan dalam bentuk galeri kartu.
- [x] Tambah, edit, dan hapus data makanan lengkap dengan gambar.
- [x] Desain responsif dan modern menggunakan Bootstrap + Custom CSS.

### 2. Fitur Order oleh Admin
- [x] User hanya melihat daftar makanan.
- [x] Admin mengisi form pemesanan secara manual.
- [x] Total harga otomatis dihitung berdasarkan jumlah * x * harga.

### 3. Halaman Pembayaran
- [x] Desain halaman pembayaran modern (3D Card Style).
- [x] Menampilkan data order: nama makanan, jumlah, total harga.
- [x] Dropdown pilihan metode pembayaran:
  - [x] Tunai
  - [x] Transfer Bank
  - [x] QRIS

### 4. Proses Pembayaran
- [x] Menyimpan data metode pembayaran ke database.
- [x] Redirect ke halaman konfirmasi pembayaran setelah selesai.

### 5. Halaman Selesai Pembayaran
- [x] Menampilkan ringkasan order + informasi pembayaran.
- [x] Menampilkan QR code jika metode pembayaran QRIS.
- [x] Notifikasi sukses + tombol kembali ke menu.

---

## 🛠️ Perubahan File/Struktur

| File / Folder                            | Status      | Keterangan                             |
|------------------------------------------|-------------|----------------------------------------|
| `controllers/Makanan.php`                | ✅ Update    | Tambah fungsi `selesai_pembayaran()` dan `selesai()` |
| `views/order/form.php`                   | ✅ Final     | Form input order oleh admin            |
| `views/order/pembayaran.php`             | ✅ Final     | Desain 3D kekinian + metode pembayaran |
| `views/order/selesai.php`                | ✅ Baru      | Halaman konfirmasi setelah pembayaran  |
| `models/Order_model.php`                 | ✅ Update    | Tambah `update()` dan `get_by_id()`    |
| `assets/img/qris.png`                    | ✅ Upload    | Gambar QRIS untuk tampilan pembayaran  |

---

## 🔧 Database

- [x] Tabel `orders` telah ditambahkan kolom:
  - `metode_pembayaran` (VARCHAR)

```sql
ALTER TABLE orders ADD COLUMN metode_pembayaran VARCHAR(50);


---

📚 _Terima kasih telah membaca README ini. Semoga project ini dapat terus dikembangkan ke tahap produksi!_
```


