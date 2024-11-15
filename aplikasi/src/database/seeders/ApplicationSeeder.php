<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan beberapa data aplikasi beasiswa
        Application::create([
            'scholarship_id' => 1, // Beasiswa ID
            'student_id' => 1, // Mahasiswa ID
            'status' => 'pending', // Status aplikasi
            'applied_at' => now(), // Waktu pengajuan aplikasi
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Application::create([
            'scholarship_id' => 1,
            'student_id' => 2,
            'status' => 'accepted',
            'applied_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Application::create([
            'scholarship_id' => 2,
            'student_id' => 3,
            'status' => 'rejected',
            'applied_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
