<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    // Relasi: Beasiswa memiliki banyak aplikasi
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
