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
| blacki       | CRUD makanan & database          | feature/crud      |
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

## Masi progres
✅ 📋 Daftar Progres Hari Ini (13 Juni 2025)
🔧 Pengembangan CRUD Makanan
[x] Makanan.php controller diperbarui untuk menangani upload gambar makanan.
[x] Fungsi store() di-controller sudah memakai $this->upload untuk menangani file.
[x] Form tambah makanan (create.php) sudah mencantumkan input gambar (belum dikonfirmasi tampilannya).
[x] Data nama, harga, deskripsi, dan gambar sudah ditambahkan ke $data.

🎨 Desain Tampilan
[x] File views/makanan/index.php sudah menggunakan Bootstrap 5.
[x] Tampilan daftar makanan berbentuk kartu (card) galeri modern seperti restoran.
[x] Tombol "Edit", "Hapus", dan "Order" ada di tiap kartu.
[x] Tampilan daftar makanan tanpa gambar sudah berfungsi tanpa error.

🐞 Debugging & Perbaikan Error
[x] Error "Tidak dapat menggunakan objek bertipe stdClass sebagai array" di index.php baris 46 sudah diperbaiki.
[x] Semua penggunaan $m['xxx'] diubah menjadi $m->xxx karena result() di model mengembalikan object.
[x] Struktur folder dan path tampaknya sudah sesuai (application/views/makanan/index.php terbaca).

📦 Catatan Tambahan
⏳ Upload gambar belum dipastikan tersimpan di folder ./uploads/.
⏳ View create.php dan edit.php perlu dicek kembali agar sesuai dengan desain modern.
⏳ Validasi form & feedback (misalnya jika input kosong) belum dipasang.
⏳ Belum ada preview gambar makanan di kartu — ini bisa ditambahkan nanti.

Kalau kamu setuju, besok kita bisa lanjut ke:
1. Menambahkan preview gambar di setiap kartu makanan.
2. Menyempurnakan form create & edit agar desainnya lebih rapi.
3. Menambahkan validasi input dan alert feedback lebih jelas.
4. Sinkronisasi ke GitHub branch feature/crud jika sudah siap.




