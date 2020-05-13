<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan', function (Blueprint $table) {
            $table->increments('id'); 
            
            $table->date('tanggal');
            $table->string('P/M');
            $table->string('suratT')->references('surat_id')->on('Surat')->onDelete('CASCADE');
            $table->string('ayatT')->references('ayat')->on('Surat')->onDelete('CASCADE');
            $table->string('suratM')->references('surat_id')->on('Surat')->onDelete('CASCADE');
            $table->string('ayatM')->references('surat')->on('Surat')->onDelete('CASCADE');

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
        Schema::dropIfExists('hafalan');
    }
}
