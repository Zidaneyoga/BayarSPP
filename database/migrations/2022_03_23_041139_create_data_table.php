<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->integer('nisn');
            $table->string('nama');
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->enum('kelas',['X','XI','XII']);
            $table->enum('jurusan',['RPL','TKJ','ELIN','MEKATRONIKA']);
            $table->bigInteger('notelepon');
            $table->string('alamat');
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
        Schema::dropIfExists('employees');
    }
}
