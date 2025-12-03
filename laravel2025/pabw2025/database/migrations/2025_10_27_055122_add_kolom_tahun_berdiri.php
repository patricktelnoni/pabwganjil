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
        Schema::table('table_fakultas', function (Blueprint $table) {
            //
            $table->year('tahun_berdiri')->after('kode_fakultas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_fakultas', function (Blueprint $table) {
            //
            $table->dropColumn('tahun_berdiri');
        });
    }
};
