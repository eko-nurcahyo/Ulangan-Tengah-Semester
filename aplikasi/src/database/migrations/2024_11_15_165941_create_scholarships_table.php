<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Nama Beasiswa
            $table->text('description'); // Deskripsi Beasiswa
            $table->date('start_date'); // Tanggal Mulai Beasiswa
            $table->date('end_date'); // Tanggal Berakhir Beasiswa
            $table->timestamps(); // Created_at, Updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('scholarships');
    }
}
