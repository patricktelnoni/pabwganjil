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
        Schema::create('table_customer', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->unique()->nullable();
            $table->string('customer_name');
            $table->integer('phone_number');
            $table->string('city');
            $table->integer('amt_paid');
            $table->timestamps();
        });

        Schema::create('table_order', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unique();
            $table->string('amount');
            $table->foreignId('customer_id')
                    ->reference('id')
                    ->on('table_customer')
                    ->constrained('table_customer')
                    ->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_customer');
        Schema::dropIfExists('table_order');
    }
};
