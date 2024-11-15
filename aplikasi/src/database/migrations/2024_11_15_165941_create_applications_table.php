<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('scholarship_id'); // ID Beasiswa
            $table->foreignId('student_id'); // ID Mahasiswa
            $table->enum('status', ['pending', 'accepted', 'rejected']); // Status Aplikasi
            $table->timestamp('applied_at')->nullable(); // Waktu pengajuan aplikasi
            $table->timestamps(); // Created_at, Updated_at

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
