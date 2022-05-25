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
        Schema::create('tb_customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name');
            $table->integer('nisn');
            $table->enum('kelas_jurusan',['X RPL','X TKJ','X ELIN','X MEKATRONIKA','XI RPL','XI TKJ','XI ELIN','XI MEKATRONIKA', 'XII RPL','XII TKJ','XII ELIN','XII MEKATRONIKA']);
            $table->enum('contact_name',['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']);
            $table->string('tanggal_bayar');
            $table->string('jumlah_bayar');
            $table->enum('status',['Lunas','Belum Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_customer');
    }
};