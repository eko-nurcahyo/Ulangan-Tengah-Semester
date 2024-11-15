<?php

namespace Database\Seeders;

use App\Models\Scholarship;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan beberapa data beasiswa
        Scholarship::create([
            'name' => 'Beasiswa Prestasi',
            'description' => 'Beasiswa untuk mahasiswa dengan prestasi akademik tinggi.',
            'start_date' => '2024-01-01',
            'end_date' => '2024-12-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Scholarship::create([
            'name' => 'Beasiswa Kemiskinan',
            'description' => 'Beasiswa untuk mahasiswa dari keluarga kurang mampu.',
            'start_date' => '2024-02-01',
            'end_date' => '2024-11-30',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
