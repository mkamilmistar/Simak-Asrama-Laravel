<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisAmalanYaumiyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisAmalanYaumiyah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisAmalan');
            $table->string('keterangan');
            $table->string('bobotAmalan');
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
        Schema::dropIfExists('jenisAmalanYaumiyah');
    }
}
