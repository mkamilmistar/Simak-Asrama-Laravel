<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanKebaikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatanKebaikan', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('catatan_id')->unsigned();
            // $table->foreign('catatan_id')->references('id')->on('catatan')->onDelete('CASCADE');
            $table->integer('jenis')->unsigned();
            $table->string('kegiatan')->nullable();
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('catatanKebaikan');
    }
}
