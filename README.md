```markdown
# 🍽 Kantin Mahasiswa

Aplikasi web berbasis CodeIgniter 3 untuk mengelola data makanan dan transaksi di kantin kampus.  
Project ini dikerjakan secara kolaboratif oleh 4 anggota tim sebagai tugas proyek kuliah.

🔗 Link: [http://localhost:8080/kantin-mahasiswa/]

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
| michael      | Leader, integrasi & pengawasan| `main`         |
| michael      | CRUD makanan & database       | `feature/crud` |
| melkior      | Desain antarmuka (UI)         | `feature/ui`   |
| pedro        | Dokumentasi & panduan sistem  | `feature/docs` |

---

## 📁 Struktur Folder Proyek

---
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

# 🍽️ Aplikasi Kantin Mahasiswa

Aplikasi berbasis web untuk membantu proses pemesanan dan pengelolaan menu makanan di kantin mahasiswa. 
Dibangun menggunakan **CodeIgniter 3** dan didesain dengan UI yang modern, responsive, serta user-friendly.

---

## 📌 Kesimpulan

Proyek **Aplikasi Kantin Mahasiswa** ini dikembangkan menggunakan framework **CodeIgniter 3** sebagai solusi 
digital untuk mempermudah proses pemesanan, pengelolaan data menu, dan administrasi transaksi di lingkungan kantin kampus.

### ✅ Fitur Utama:
- 📝 **CRUD menu makanan**, lengkap dengan fitur upload gambar
- 🖼️ **Halaman pemesanan dengan tampilan kartu menu modern**
- 🔄 **Pengelolaan pesanan dua layar** (user & admin) untuk memisahkan input dan review order
- ✅ **Validasi input** dan **tampilan responsif** yang ramah pengguna

---

## 🧰 Teknologi yang Digunakan
- PHP 7+
- CodeIgniter 3
- MySQL / MariaDB
- HTML, CSS (AdminLTE/Tailwind)
- JavaScript (jQuery, AJAX opsional)

---

## 🏁 Cara Menjalankan
1. Clone repositori ini
2. Buat database `kantin_mahasiswa` dan import file `.sql` jika tersedia
3. Atur koneksi database di `application/config/database.php`
4. Jalankan di browser via `localhost/kantin-mahasiswa` atau sesuai folder kamu


---

## 🤝 Kontribusi
Pull request dan issue terbuka untuk pengembangan lebih lanjut.

---

## © 2025 - Aplikasi Kantin Mahasiswa
Proyek ini dibuat untuk keperluan pembelajaran dan pengembangan sistem informasi pemesanan kantin secara digital.
