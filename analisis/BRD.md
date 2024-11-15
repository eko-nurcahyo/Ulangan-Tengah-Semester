Dokumen Persyaratan Bisnis (BRD)
Proyek: Aplikasi Pengelolaan Data Beasiswa
Versi: 1.2
Tanggal: 15 November 2024

1. Tujuan Proyek
Objektif:
Aplikasi ini bertujuan untuk mempermudah mahasiswa mendaftarkan diri pada program beasiswa, melihat status pendaftaran, serta membantu admin dalam mengelola data beasiswa secara efisien.

2. Fitur Utama
Untuk Mahasiswa
Melihat Beasiswa: Mahasiswa dapat mengakses daftar beasiswa dengan rincian seperti:
Nama Beasiswa
Kriteria Penerima
Tanggal Pendaftaran
Tanggal Penutupan
Status Pendaftaran
Mendaftar Beasiswa: Mahasiswa dapat mengunggah dokumen persyaratan dan melengkapi form pendaftaran.
Untuk Admin
Pengelolaan Beasiswa: Admin dapat menambah, mengubah, dan menghapus data beasiswa dengan informasi lengkap.
Verifikasi Pendaftaran: Admin dapat memeriksa dokumen pendaftaran mahasiswa dan mengubah status pendaftaran menjadi diterima atau ditolak.
3. Persyaratan Fungsional
Sistem Login
Akses Berdasarkan Peran:
Mahasiswa: Melihat daftar beasiswa, mendaftar, dan memantau status pendaftaran.
Admin: Mengelola data beasiswa dan memverifikasi pendaftaran.
Pengaturan & Tampilan Data Beasiswa
Admin:
Menambah, memperbarui, atau menghapus data beasiswa.
Melakukan validasi dokumen pendaftaran mahasiswa.
Mahasiswa:
Melihat daftar dan rincian beasiswa.
Mendaftar dan mengunggah dokumen persyaratan.
4. Persyaratan Non-Fungsional
Kegunaan: Antarmuka ramah pengguna untuk mahasiswa dan admin.
Keamanan:
Mahasiswa hanya memiliki akses untuk melihat dan mendaftar beasiswa.
Admin memiliki kontrol penuh atas pengelolaan data beasiswa.
5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat
Beasiswa (Scholarships)
Model: Scholarships. Menyimpan informasi lengkap tentang beasiswa:

Migration: Struktur tabel:
id: bigint UNSIGNED (Primary Key)
name: varchar(255) - Nama beasiswa
criteria: text - Kriteria penerima beasiswa
open_date: date - Tanggal mulai pendaftaran
close_date: date - Tanggal akhir pendaftaran
created_at: timestamp - Waktu data dibuat
updated_at: timestamp - Waktu data diubah
Seeder: Data awal untuk pengujian, seperti beberapa program beasiswa.

Resource: Endpoint API untuk data beasiswa:

Dapat diakses oleh mahasiswa untuk melihat data beasiswa.
Dapat diakses oleh admin untuk mengelola data beasiswa.
Pendaftaran Beasiswa (Applications)
Model: Applications. Menyimpan data pendaftaran mahasiswa:

Migration: Struktur tabel:
id: bigint UNSIGNED (Primary Key)
scholarship_id: bigint UNSIGNED (Foreign Key) - ID beasiswa terkait
student_id: bigint UNSIGNED (Foreign Key) - ID mahasiswa yang mendaftar
status: enum ('pending', 'accepted', 'rejected') - Status pendaftaran
submitted_at: timestamp - Waktu pendaftaran diajukan
created_at: timestamp
updated_at: timestamp
Seeder: Data pendaftaran awal untuk pengujian.

Resource: Endpoint API untuk data pendaftaran:

Mahasiswa dapat melihat status pendaftarannya.
Admin dapat memverifikasi dan mengubah status pendaftaran.
Permissions
Model: Permission (disediakan oleh Spatie Laravel Permission).

Seeder: PermissionsSeeder untuk menambahkan permissions yang dibutuhkan oleh role mahasiswa:

view_scholarships: Mengizinkan mahasiswa melihat data beasiswa.
apply_scholarship: Mengizinkan mahasiswa mendaftar beasiswa.
6. Analisis Permissions untuk Mahasiswa dan Admin
Permissions diperlukan untuk memastikan akses sesuai peran:

Mahasiswa:
Hanya dapat melihat data beasiswa dan mendaftar.
Admin:
Memiliki akses penuh untuk mengelola data beasiswa dan memverifikasi pendaftaran.
Permissions ini memastikan sistem tetap aman dan sesuai dengan kebutuhan pengguna.