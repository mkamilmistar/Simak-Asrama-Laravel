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
            $table->integer('jenisAmalan_id')->unsigned();
            $table->foreign('jenisAmalan_id')->references('id')->on('jenisAmalanYaumiyah')->onDelete('CASCADE');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('jumlah')->default(0);
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