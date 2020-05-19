<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSholatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sholats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->date('tanggal');
            $table->string('jenis_sholat');
            $table->integer('waktu_adzan');
            $table->integer('waktu_masuk');
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
        Schema::dropIfExists('sholats');
    }
}