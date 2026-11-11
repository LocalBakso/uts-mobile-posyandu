<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('anak', function (Blueprint $table) {
        $table->id('id_anak'); // Primary Key sesuai jurnal
        $table->unsignedBigInteger('id_ibu'); // Relasi ke tabel ibu
        $table->string('nama_anak', 50);
        $table->date('tgl_lahir');
        $table->string('jenis_kelamin', 9);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('anak');
}
};
