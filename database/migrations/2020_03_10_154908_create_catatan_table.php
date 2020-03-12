<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan', function (Blueprint $table) {
            $table->increments('id');
            $table->date('waktu');
            $table->integer('catatan_id')->unsigned();
            $table->foreign('catatan_id')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->integer('laporan_id')->unsigned();
            $table->foreign('laporan_id')->references('id')->on('pembinaAsrama')->onDelete('CASCADE');
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
        Schema::dropIfExists('catatan');
    }
}
