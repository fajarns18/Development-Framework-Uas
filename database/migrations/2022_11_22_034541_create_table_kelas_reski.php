<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKelasReski extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kelas_reski', function (Blueprint $table) {
            $table->id();
            $table ->string('id_kelas_reski','10');
            $table ->string('nama_kelas_reski','45');
            $table ->string('lantai_kelas_reski','10');
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
        Schema::dropIfExists('t_kelas_reski');
    }
}
