<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'scholarship_id',
        'student_id',
        'status',
        'applied_at',
        'created_at',
        'updated_at',
    ];

    // Relasi: Aplikasi berhubungan dengan Beasiswa
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    // Relasi: Aplikasi berhubungan dengan Mahasiswa (Users)
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
