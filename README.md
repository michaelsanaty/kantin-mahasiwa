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
| blacki       | CRUD makanan & database        | `feature/crud` |
| melkior      | Desain antarmuka (UI)          | `feature/ui`   |
| pedro        | Dokumentasi & panduan sistem   | `feature/docs` |

---

## 📁 Struktur Folder Proyek

```bash
kantin-mahasiswa/
├── application/
│   ├── config/
│   ├── controllers/
│   │   └── Makanan.php
│   ├── models/
│   │   └── Makanan_model.php
│   ├── views/
│   │   ├── layout/
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   └── makanan/
│   │       ├── index.php
│   │       ├── tambah.php
│   │       └── edit.php
├── assets/
├── uploads/
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

---

📚 _Terima kasih telah membaca README ini. Semoga project ini dapat terus dikembangkan ke tahap produksi!_
```


