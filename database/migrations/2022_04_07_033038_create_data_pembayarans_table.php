<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nisn');
            $table->enum('kelas_jurusan',['X RPL','X TKJ','X ELIN','X MEKATRONIKA','XI RPL','XI TKJ','XI ELIN','XI MEKATRONIKA','XII RPL','XII TKJ','XII ELIN','XII MEKATRONIKA']);
            $table->enum('bulan_bayar',['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']);
            $table->string('jumlah_bayar');
            $table->string('sisa_tagihan');
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
        Schema::dropIfExists('data_pembayarans');
    }
}
