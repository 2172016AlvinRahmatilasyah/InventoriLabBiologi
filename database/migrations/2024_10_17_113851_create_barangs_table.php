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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // Primary key 'id'
            $table->string('nama_barang', 255); // Kolom untuk nama barang
            $table->foreignId('jenis_barang_id')->constrained('jenis_barangs')->onDelete('cascade'); // Foreign key
            $table->decimal('stok', 10, 2); // Kolom untuk stok
            $table->date('kadaluarsa')->nullable(); // Kolom untuk kadaluarsa
            $table->string('lokasi', 100)->nullable(); // Kolom untuk lokasi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
