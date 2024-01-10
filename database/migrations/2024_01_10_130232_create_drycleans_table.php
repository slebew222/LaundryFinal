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
        Schema::create('drycleans', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->timestamp('order_masuk')->nullable();
            $table->timestamp('order_keluar')->nullable();
            $table->string('nama_pelanggan');
            $table->string('jenis_paket');
            $table->string('waktu_kerja');
            $table->string('berat');
            $table->string('no_telepon');
            $table->string('alamat');
            // $table->integer('jumlah');
            $table->text('keterangan')->nullable(true)->default('tidak ada keterangan');
            // $table->timestamp('no_order')->timestamps();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drycleans');
    }
};
