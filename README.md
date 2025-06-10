# 🍽 Kantin Mahasiswa

Aplikasi web berbasis *CodeIgniter 3* untuk mengelola data makanan dan transaksi di kantin kampus. Project ini dikerjakan secara kolaboratif oleh 4 anggota tim sebagai tugas proyek kuliah.

---

## 🚀 Teknologi yang Digunakan

- *CodeIgniter 3*
- *PHP 7.x*
- *MySQL* (XAMPP)
- *Bootstrap* (untuk antarmuka)
- *Git & GitHub* (untuk kolaborasi)

---

## 👥 Tim & Branch

| Nama Anggota | Tugas                            | Branch              |
|--------------|----------------------------------|---------------------|
| michael      | Leader, integrasi & pengawasan   | main              |
| mario        | CRUD makanan & database          | feature/crud      |
| melkior      | Desain antarmuka (UI)            | feature/ui        |
| pedro        | Dokumentasi & panduan sistem     | feature/docs      |

---

## 📁 Struktur CRUD Makanan

```plaintext
application/
├── controllers/
│   └── Makanan.php             # Controller: proses CRUD
│
├── models/
│   └── Makanan_model.php       # Model: query DB
│
├── views/
│   └── makanan/
│       ├── index.php           # Tampilkan data makanan
│       ├── create.php          # Form tambah makanan
│       └── edit.php            # Form edit makanan
