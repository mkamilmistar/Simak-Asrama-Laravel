<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalanDoaHadistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalanDoaHadist', function (Blueprint $table) {
            $table->increments('id'); 
            
            $table->date('tanggal');
            $table->string('pm');
            $table->text('doa')->onDelete('CASCADE')->nullable();
            $table->text('hadist')->onDelete('CASCADE')->nullable();
            $table->integer('nilai');

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
