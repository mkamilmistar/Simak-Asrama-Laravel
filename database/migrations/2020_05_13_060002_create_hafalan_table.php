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
            $table->string('pm');
            $table->string('tm')->nullable();
            $table->integer('surat_id')->unsigned();
            $table->foreign('surat_id')->references('id')->on('surat')->onDelete('CASCADE');
            $table->integer('ayat0')->onDelete('CASCADE')->nullable();
            $table->integer('ayat1')->onDelete('CASCADE')->nullable();
            $table->integer('nilai');

            $table->integer('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->integer('pembina_id')->unsigned();
            $table->foreign('pembina_id')->references('id')->on('guru')->onDelete('CASCADE');
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
