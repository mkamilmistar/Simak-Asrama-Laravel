<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCatatanHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatanHarian', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('catatanHarian_id')->unsigned();
            // $table->foreign('catatanHarian_id')->references('id')->on('catatan')->onDelete('CASCADE');
            $table->text('deskripsi')->nullable();
            $table->string('kategori');
            $table->timestamp('waktu');
            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('pembina_id')->unsigned();
            $table->foreign('pembina_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('catatan_harian');
    }
}
