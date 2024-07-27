<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwalReski extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jadwal_reski', function (Blueprint $table) {
            $table->id();
            $table ->string('id_jadwal_reski','10');
            $table ->string('nama_pelajaran_reski','45');
            $table ->string('waktu_reski','10');
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
        Schema::dropIfExists('t_jadwal_reski');
    }
}
