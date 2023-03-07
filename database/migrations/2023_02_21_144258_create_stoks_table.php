<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('namaPegawai');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            $table->string('nama');
            $table->string('kategori');
            $table->string('foto') -> nullable();
            $table->string('harga');
            $table->integer('stokAwal')->nullable();
            $table->integer('stokAkhir')->nullable();
            $table->integer('terjual')->nullable();
            $table->float('total')->nullable();
         

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('stoks');
    }
};
