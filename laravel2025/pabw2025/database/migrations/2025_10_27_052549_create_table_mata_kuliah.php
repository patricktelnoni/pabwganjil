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
        Schema::create('table_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('nipdosen')->unique();
            $table->timestamps();
        });
        
        Schema::create('table_mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mata_kuliah');
            $table->string('nama_mata_kuliah');
            $table->integer('sks');
            $table->foreignId('dosen_id')
                    ->reference('id')
                    ->on('table_dosen')
                    ->constrained('table_dosen')
                    ->onDelete('cascade')->default(1);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_mata_kuliah');
        Schema::dropIfExists('table_dosen');
    }
};
