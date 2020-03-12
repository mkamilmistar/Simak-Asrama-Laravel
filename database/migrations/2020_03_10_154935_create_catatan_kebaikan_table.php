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
            $table->integer('catatanKebaikan_id')->unsigned();
            $table->foreign('catatanKebaikan_id')->references('id')->on('catatan')->onDelete('CASCADE');
            $table->string('catatan_kebaikan');
            $table->string('catatan_keburukan');
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
