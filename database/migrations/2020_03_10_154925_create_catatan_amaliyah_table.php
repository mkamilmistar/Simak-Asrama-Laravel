<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanAmaliyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatanAmaliyah', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('catatan_id')->unsigned();
            $table->foreign('catatan_id')->references('id')->on('catatan')->onDelete('CASCADE');
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('CASCADE');
            
            $table->string('jenis_amalan');
            $table->integer('bobot_amalan');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('catatanAmaliyah');
    }
}
