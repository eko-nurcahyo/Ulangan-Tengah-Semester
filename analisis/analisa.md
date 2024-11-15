1. Tujuan Proyek
Analisis:
Proyek ini bertujuan untuk mengatasi masalah yang dihadapi mahasiswa dalam mendaftar beasiswa dan memantau statusnya. Mahasiswa sering kali kesulitan menemukan informasi beasiswa yang tepat dan memerlukan platform yang mempermudah proses pendaftaran. Di sisi lain, admin juga memerlukan sistem untuk mengelola data beasiswa, melakukan validasi dokumen, dan memantau status pendaftaran secara efisien. Aplikasi ini dirancang agar keduanya dapat berinteraksi sesuai peran masing-masing.

2. Fitur Utama
Untuk Mahasiswa

Analisis: Mahasiswa memerlukan akses untuk melihat informasi beasiswa, sehingga mereka bisa memilih program yang sesuai dengan kriteria mereka. Fitur pendaftaran yang memungkinkan mahasiswa mengunggah dokumen juga sangat penting untuk mempermudah proses administrasi.
Untuk Admin

Analisis: Admin memiliki tanggung jawab untuk menambah dan mengelola informasi beasiswa. Selain itu, fitur verifikasi pendaftaran memastikan bahwa hanya pendaftar yang memenuhi kriteria saja yang dapat diterima. Akses penuh ini penting agar admin bisa dengan mudah mengatur informasi beasiswa dan mengelola pendaftaran secara efektif.
3. Persyaratan Fungsional
Analisis:

Sistem login dengan peran yang berbeda memastikan bahwa hak akses tetap aman dan sesuai kebutuhan. Mahasiswa hanya memiliki akses untuk melihat dan mengajukan pendaftaran, sedangkan admin memiliki kendali penuh. Hal ini memastikan pembagian akses yang jelas sehingga aplikasi dapat berfungsi dengan aman dan efektif.
Pengaturan tampilan data beasiswa juga sangat penting. Mahasiswa dapat melihat informasi beasiswa secara rinci, sementara admin dapat mengubah data yang diperlukan. Hal ini mengurangi risiko data yang salah atau tidak akurat karena admin dapat mengelola data secara langsung.
4. Persyaratan Non-Fungsional
Analisis:

Kegunaan: Antarmuka yang ramah pengguna memungkinkan mahasiswa dan admin menggunakan aplikasi ini tanpa kesulitan. Hal ini penting untuk memastikan aplikasi dapat digunakan oleh pengguna dengan tingkat kemampuan teknis yang berbeda.
Keamanan: Fitur keamanan yang membatasi akses mahasiswa hanya untuk melihat data dan mengajukan pendaftaran sangat penting dalam mengurangi risiko penyalahgunaan data. Admin yang memiliki kontrol penuh juga bisa memastikan keamanan data lebih terjaga.
5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat
Analisis:

Struktur tabel yang dirancang dengan kolom yang jelas seperti scholarship_id, student_id, status, dan submitted_at memungkinkan pencatatan data beasiswa dan pendaftaran dengan baik. Selain itu, penggunaan model dan seeder membantu mempercepat proses pengembangan dan pengujian aplikasi.
Model Permissions dari Spatie Laravel Permission juga merupakan pilihan yang baik untuk mengatur hak akses. Hal ini mempermudah pengembangan dan menjaga standar keamanan aplikasi. Seeder PermissionsSeeder memastikan bahwa permissions seperti view_scholarships dan apply_scholarship terpasang untuk role mahasiswa, menjaga peran mahasiswa hanya pada akses yang diperlukan.
6. Analisis Permissions untuk Mahasiswa dan Admin
Analisis:

Dengan permissions khusus, mahasiswa dapat dibatasi hanya pada akses yang diperlukan untuk melihat dan mendaftar beasiswa. Ini penting untuk menjaga keamanan dan privasi data. Sedangkan admin memiliki akses penuh untuk mengelola data dan memverifikasi pendaftaran, sehingga proses administrasi beasiswa dapat dilakukan dengan lancar.
Permissions ini juga memastikan pembagian hak akses yang efektif sehingga aplikasi dapat digunakan dengan baik sesuai peran masing-masing pengguna.

Kesimpulan Analisis
Aplikasi Pengelolaan Data Beasiswa ini dirancang untuk meningkatkan efisiensi dan keamanan dalam pengelolaan data beasiswa. Dengan fitur yang terstruktur dan pembagian hak akses yang jelas, aplikasi ini dapat membantu mahasiswa dalam proses pendaftaran dan membantu admin dalam mengelola data secara efektif.